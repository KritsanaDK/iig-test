<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index_page extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
}
