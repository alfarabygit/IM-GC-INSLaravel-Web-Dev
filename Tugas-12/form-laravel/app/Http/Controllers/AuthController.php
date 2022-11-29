<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //membuat function register
    public function register()
    {
        return view('register');
    }

    public function proses()
    {
        return view('welcome1');
    }
}
