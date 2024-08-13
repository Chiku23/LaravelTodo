<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Todo;

class HomeController extends Controller
{
    //Functions for Homepage
    public function index(){
        // return the Welcome page
        $user = Auth::user();
        if($user){
            $todos = Todo::where('created_by', Auth::user()->id)->get();
            return view('welcome')->with(compact('user','todos'));
        }
        else{
            return redirect()->route('login')->withError('Please Log In.');
        }
    }
    public function AddTodo(Request $request){
        $user = Auth::user();

        // Validate the request data
        $request->validate([
            'todo' => 'required|string',
        ]);

        // Create a new user
        $todo = new Todo;

        $todo->todo = $request->input('todo');
        $todo->created_by = $user->id;
        $todo->save();
        
        // Redirect to the dashboard or login page after registration
        return redirect()->route('home');

    }
}
