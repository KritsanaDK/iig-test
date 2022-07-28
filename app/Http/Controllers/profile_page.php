<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile_page extends Controller
{
    //
    public function index(Request $request)
    {
        $userName = $request->userName;
        $pass = $request->pass;
        $result = $request->result;

        return view('profile', compact('userName', 'pass', 'result'));
    }
}
