<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //Functions for Homepage
    public function index(){
        // return the Welcome page
        $user = Auth::user();
        if($user){
            return view('welcome')->with(compact('user'));
        }
        else{
            return redirect()->route('login')->withError('Please Log In.');
        }
    }
}
