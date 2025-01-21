<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('pages.dashboard.index');

Route::get('/register', [AuthController::class, 'tampil_register'])->name('register'); // Alias register
Route::post('/register/submit', [AuthController::class, 'submit_register'])->name('register.submit');


Route::get('/login', [AuthController::class, 'tampil_login'])->name('login');
Route::post('/login/submit', [AuthController::class, 'submit_login'])->name('login.submit');