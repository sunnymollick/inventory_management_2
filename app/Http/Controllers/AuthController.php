<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{
    public function login(){
        return view('backend.pages.auth.login');
    }

    public function register(){
        return view('backend.pages.auth.register');
    }
}