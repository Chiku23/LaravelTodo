<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    //Functions for Homepage
    public function index(){
        // return the Welcome page
        return view('auth.login');
    }
    // Handle login request
    public function loginUser(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Create a User object and retrieve the user by email
        $user = new User(); // Create a new User instance
        $user = $user->where('email', $request->email)->first(); // Retrieve the user

        if (!$user) {
            // User not found
            return back()->withErrors([
                'ErrorMSG' => 'User not found.',
            ]);
        }

        // Check if the password is correct
        if (!Hash::check($request->password, $user->password)) {
            // Password is incorrect
            return back()->withErrors([
                'ErrorMSG' => 'Password is incorrect.',
            ]);
        }

        // Log in the user
        Auth::login($user);

        // Redirect to intended URL
        return redirect()->intended('/');
    }

    // Handle logout request
    public function logout(Request $request)
    {
        Auth::logout();
        // Flash a message to the session
        $request->session()->flash('status', 'Logged Out Successfully'); 

        return redirect()->route('login');
    }
}
