<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function manual(Request $request)
    {
        $data['user'] = Auth::user();
        return view('panel.files.manual', $data);
    }
    public function video(Request $request)
    {
        return view('panel.files.video');
    }
    public function receipt(Request $request)
    {
        return view('panel.files.receipt');
    }
}
