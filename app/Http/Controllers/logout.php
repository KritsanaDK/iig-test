<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    //
    public function index()
    {
        // session()->flush();
        $login = 'login page';
        return view('login', compact('login'));
    }

    public function perform()
    {
        Session::flush();

        Auth::logout();
        $login = 'login page';
        // return view('login', compact('login'));
        return redirect('login');
    }
}
