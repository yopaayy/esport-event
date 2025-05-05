<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// FRONT - Public
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');


Route::get('/user-dashboard', [DashboardController::class, 'dashboard'])->name('user-dashboard');
