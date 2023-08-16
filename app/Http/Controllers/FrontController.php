<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('Pages.home');
    }
    public function login(){
        return view('Pages.login');
    }
    public function profile(){
        return view('Pages.profile');
    }
    public function register(){
        return view('Pages.register');
    }
}
