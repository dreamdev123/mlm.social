<?php

namespace App\Http\Controllers;

use App\User;
use App\Rank;
use App\RankUser;
use App\RankAchievementHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;

class IncentivesController extends Controller
{
    public function index(Request $request)
    {
        $authUser = Auth::user();
        $rank = $this->calculateRank($authUser);
        if ($rank) $this->distribute($authUser, $rank);
        $totalSales = $this->calculateSales() * 120;
        $totalShareCommissions = $totalSales * Rank::sum('profit') / 100 / Rank::count();
        // Direct enrollment commission percent is 20%
        // To do: Create Commissions table and add DirectEnrollmentCommission module
        $totalDirectCommissions = $this->calculateDirects($authUser) * 120 * 0.2;
        $groupByRank = RankUser::select('rank_id', DB::raw("count(*) as rank_count"))
            ->groupBy('rank_id')
            ->get();
        $rankCounts = [];
        foreach ($groupByRank as $group) {
            $rankCounts[$group->rank_id] = $group->rank_count;
        }

        return view('panel.incentives.index', compact('authUser', 'totalShareCommissions', 'rankCounts', 'totalDirectCommissions'));
    }
    
    public function teams(Request $request)
    {
        $user_id = $request->get('user_id');
        $viewer = Auth::user();
        if (isset($user_id)) {
            $viewer = User::find($user_id);
        }
        
        return view('panel.incentives.teams', compact('viewer'));
    }

    function calculateRank(User $user)
    {
        return Rank::orderBy('id', 'desc')->get()->filter(function ($rank) use ($user) {
            return $this->isQualified($rank, $user);
        })->first();
    }

    function isQualified(Rank $rank, User $user)
    {
        $checkChildren = function ($ranksToCheck) use ($user, $rank) {
            
            if ($user->referrers->count() < $ranksToCheck['minCount']) return false;

            /** @var Collection $children */
            $children = $user->referrers->filter(function ($child) use ($ranksToCheck) {
                /** @var User $child */
                return ($child->referrers->count() >= $ranksToCheck['count_by_partner']);
            });

            if ($children->count() < $ranksToCheck['partners']) return false;

            return true;
        };

        $ranksToCheck = [
            'minCount' => $rank->customers,
            'partners' => $rank->partners,
            'count_by_partner' => $rank->partner_group,
        ];

        if (!$checkChildren($ranksToCheck)) return false;

        return true;
    }

    function distribute(User $user, $rank)
    {
        $existingRank = RankUser::where('user_id', $user->id)->first();
        if (!$existingRank || ($rank->id != $existingRank->rank_id)) {
            if ($existingRank)
                RankUser::where('user_id', $user->id)->update([
                    'rank_id' => $rank->id
                ]);
            else
                RankUser::create([
                    'user_id' => $user->id,
                    'rank_id' => $rank->id
                ]);

            RankAchievementHistory::create([
                'user_id' => $user->id,
                'rank_id' => $rank->id
            ]);
        }
    }
    
    function calculateSales()
    {
        $usersInThisMonths = User::whereMonth('created_at', Carbon::now()->month)
            ->get();
        return $usersInThisMonths->count();
    }
    
    function calculateDirects(User $user)
    {
        $myReferralsInThisMonths = User::where('sponsor_id', $user->id)->whereMonth('created_at', Carbon::now()->month)
            ->get();
        return $myReferralsInThisMonths->count();
    }

    function fetch(Request $request)
    {
        $levels = $request->get('levels');
        $levels = isset($levels) ? explode(",", $levels) : [];

        $result = User::query()
            ->whereHas('profile', function ($query) use ($request) {
                /** @var Builder $query */
                if ($keyword = $request->get('keyword')) $query->whereRaw('concat(first_name," ",last_name) LIKE ?', "{$keyword}%");
            });
        if (count($levels)) {
            $result = $result
                ->whereHas('rank', function ($query) use ($levels) {
                    /** @var Builder $query */
                    $query->whereIn('rank_id', $levels);
                });
            }
        
        $data['rankUsers'] = $result->get();

        return view('panel.incentives.partials.result', $data);
    }
}
