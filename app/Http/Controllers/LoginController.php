<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Functions for Homepage
    public function index(){
        // return the Welcome page
        return view('auth.login');
    }
}
