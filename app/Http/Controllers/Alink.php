<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alink extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
