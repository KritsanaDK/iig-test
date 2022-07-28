<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_page extends Controller
{
    //
    public function index()
    {
        $login = 'login page';
        return view('login', compact('login'));
    }
}
