<?php

namespace App\Http\Controllers;

use App\User;
use App\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        $friendIds = Friend::where('user_id', '=', $authUser->id)->pluck('connected_user_id')->toArray();
        $coaches = User::where('user_type', '=', 2)->whereIn('id', $friendIds)->get();

        return view('panel.coaches.index', compact('coaches'));
    }
}
