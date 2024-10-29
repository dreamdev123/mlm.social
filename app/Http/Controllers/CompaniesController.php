<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        $companies = User::where('id', '<>', $authUser->id)->where('user_type', '=', 1)->get();

        return view('panel.companies.index', compact('authUser', 'companies'));
    }

    public function likes(Request $request) {
        $authUserId = Auth::user()->id;
        $profile = Profile::find($request->id);
        $followers = [];
        $like = true;
        if ($profile->followers && count(explode(',', $profile->followers)) > 0) {
            $followers = explode(',', $profile->followers);
            if (in_array($authUserId, $followers)) {
                $index = array_search($authUserId, $followers);
                array_splice($followers, $index, 1);
                $like = false;
            } else {
                array_push($followers, $authUserId);
            }
        } else {
            array_push($followers, $authUserId);
        }
        $profile->followers = implode(",", $followers);
        $profile->save();
        return response()->json(['like' => $like, 'followers' => count($followers)]);
    }
}
