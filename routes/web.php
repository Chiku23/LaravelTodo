<?php

use Illuminate\Support\Facades\Route;

// Use Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Define Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/addtodo', [HomeController::class, 'AddTodo'])->name('addtodo');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/loginUser', [LoginController::class, 'loginUser']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/registerUser',[RegisterController::class, 'registerUser']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');