<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Friend;
use App\City;
use App\State;
use App\Country;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Show the My Profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($userID = Null)
    {
        $userId = $userID ? $userID : Auth::user()->id;
        $data['authUser'] = Auth::user();
        $data['is_me'] = $userId == Auth::user()->id;
        $data['user'] = $user = User::find($userId);
        if (!isset($user))
            return redirect()->route('profile');
        $friendIds = Friend::where('user_id', '=', $user->id)->pluck('connected_user_id')->toArray();
        $data['friends'] = User::where('user_type', '=', 0)->whereIn('id', $friendIds)->get();
        $data['groups'] = Team::where('user_id', '=', $user->id)->pluck('name')->toArray();
        $data['city'] = City::find($user->profile->city) ? City::find($user->profile->city)->name : '';
        $data['state'] = State::find($user->profile->state) ? State::find($user->profile->state)->name : '';
        $data['country'] = Country::find($user->profile->country) ? Country::find($user->profile->country)->name : '';

        if ($user->user_type === 1) {
            return view('panel.company.profile', $data);
        } else if ($user->user_type === 2) {
            return view('panel.coaches.profile', $data);
        } else {
            return view('panel.individual.profile', $data);
        }
    }

    public function edit()
    {
        $data['user'] = $user = Auth::user();
        $friendIds = Friend::where('user_id', '=', $user->id)->pluck('connected_user_id')->toArray();
        $data['friends'] = User::where('user_type', '=', 0)->whereIn('id', $friendIds)->get();
        $city = '';
        $state = '';
        $country = '';
        $addressStatus = false;
        
        
        $data['address'] =  $city . ', ' . $state . ', ' . $country;
        $data['selected_address'] = $user->profile->city . ',' . $user->profile->state . ',' . $user->profile->country;
        $data['addressStatus'] =  $addressStatus;

        $data['city'] = City::find($user->profile->city) ? City::find($user->profile->city)->name : '';
        $data['state'] = State::find($user->profile->state) ? State::find($user->profile->state)->name : '';
        $data['country'] = Country::find($user->profile->country) ? Country::find($user->profile->country)->name : '';

        if ($user->user_type !== 1) {
            return view('panel.individual.edit', $data);
        } else {
            return view('panel.company.edit', $data);
        }
    }

    public function setting()
    {
        $data['user'] = $user = Auth::user();

        if ($user->user_type !== 0) {
            return view('panel.company.setting', $data);
        } else {
            return view('panel.individual.setting', $data);
        }
    }

    public function updateProfileAddress(Request $request) {
        $profile = Auth::user()->profile;
        if ($request->address) {
            $addressArray = explode(",", $request->address);
            $profile->city = $addressArray[0];
            $profile->state = $addressArray[1];
            $profile->country = $addressArray[2];
        }
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateMainInterested(Request $request) {
        $profile = Profile::find($request->id);
        $profile->main_interests = $request->main_interests;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateOtherInterested(Request $request) {
        $profile = Profile::find($request->id);
        $profile->other_interests = $request->other_interests;
        $profile->gender = $request->gender;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function uploadProfileAvatar(Request $request) {
        $profile = Auth::user()->profile;
        $file = $request->file('file');
        $filename = $profile->user->username . '-' . $request->field . '.jpg';

        if (!file_exists(base_path() . '/public/uploads/' . $profile->user->username)) {
            mkdir(base_path() . '/public/uploads/' . $profile->user->username, 0777 , true);
        }
        $file->move(base_path() . '/public/uploads/' . $profile->user->username, $filename);
        switch ($request->field) {
            case 'thumbnail1':
                $profile->other_avatar_url1 = $filename;
                break;
            case 'thumbnail2':
                $profile->other_avatar_url2 = $filename;
                break;
            case 'thumbnail3':
                $profile->other_avatar_url3 = $filename;
                break;
            case 'thumbnail4':
                $profile->other_avatar_url4 = $filename;
                break;
            case 'thumbnail5':
                $profile->other_avatar_url5 = $filename;
                break;
            case 'thumbnail6':
                $profile->other_avatar_url6 = $filename;
                break;
            case 'thumbnail7':
                $profile->other_avatar_url7 = $filename;
                break;
            case 'thumbnail8':
                $profile->other_avatar_url8 = $filename;
                break;
            case 'banner_img':
                $profile->banner_img_url = $filename;
                break;
            case 'company_logo':
                $profile->logo_url = $filename;
                break;
            case 'main_avatar':
                $profile->main_avatar_url = $filename;
                break;
            default:
                break;
        }
        $profile->save();

        return response()->json(['success' => 'Profile avatar successfully uploaded']);
    }

    public function removeProfileAvatar(Request $request) {
        $profile = Auth::user()->profile;
        $filename = '';
        
        switch ($request->field) {
            case 'thumbnail1':
                $filename = $profile->other_avatar_url1;
                $profile->other_avatar_url1 = null;
                break;
            case 'thumbnail2':
                $filename = $profile->other_avatar_url2;
                $profile->other_avatar_url2 = null;
                break;
            case 'thumbnail3':
                $filename = $profile->other_avatar_url3;
                $profile->other_avatar_url3 = null;
                break;
            case 'thumbnail4':
                $filename = $profile->other_avatar_url4;
                $profile->other_avatar_url4 = null;
                break;
            case 'thumbnail5':
                $filename = $profile->other_avatar_url5;
                $profile->other_avatar_url5 = null;
                break;
            case 'thumbnail6':
                $filename = $profile->other_avatar_url6;
                $profile->other_avatar_url6 = null;
                break;
            case 'thumbnail7':
                $filename = $profile->other_avatar_url7;
                $profile->other_avatar_url7 = null;
                break;
            case 'thumbnail8':
                $filename = $profile->other_avatar_url8;
                $profile->other_avatar_url8 = null;
                break;
            case 'banner_img':
                $filename = $profile->banner_img_url;
                $profile->banner_img_url = null;
                break;
            case 'company_logo':
                $filename = $profile->logo_url;
                $profile->logo_url = null;
                break;
            default:
                $filename = $profile->main_avatar_url;
                $profile->main_avatar_url = null;
                break;
        }
        if (file_exists(base_path() . '/public/uploads/' . $profile->user->username . '/' . $filename)) {
            unlink(base_path() . '/public/uploads/' . $profile->user->username . '/' . $filename);
        }
        $profile->save();

        return response()->json(['success' => 'Profile avatar successfully removed']);
    }

    public function updateStoryContent(Request $request) {
        $profile = Profile::find($request->id);
        $profile->story_content = $request->story_content;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateJobTitle(Request $request) {
        $profile = Profile::find($request->id);
        $profile->job_title = $request->job_title;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateCity(Request $request) {
        $profile = Profile::find($request->id);
        $profile->city = $request->city;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateCountry(Request $request) {
        $profile = Profile::find($request->id);
        $profile->country = $request->country;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateStreet(Request $request) {
        $profile = Profile::find($request->id);
        $profile->street = $request->street;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateCode(Request $request) {
        $profile = Profile::find($request->id);
        $profile->postal_code = $request->code;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateEmail(Request $request) {
        $user = User::find($request->id);
        $user->email = $request->email;
        $user->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updatePhone(Request $request) {
        $profile = Profile::find($request->id);
        $profile->phone = $request->phone;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

    public function updateSite(Request $request) {
        $profile = Profile::find($request->id);
        $profile->site_url = $request->site;
        $profile->save();
        return response()->json(['success' => 'Profile successfully updated']);
    }

}
