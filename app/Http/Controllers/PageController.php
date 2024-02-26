<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function BoardBlog()
    {
        return view('Landing.LandingPage');
    }

    public function LoginUser()
    {
        return view('Login.LoginUser');
    }

    

    public function RegisterUser()
    {
        return view('Register.registerUser');
    }
}
