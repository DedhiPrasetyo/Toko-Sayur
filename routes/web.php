<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('pages.dashboard.index');

Route::get('/login', [AuthController::class, 'login_function'])->name('login');
Route::post('/login/proses', [AuthController::class, 'login_proses_function'])->name('login.proses');

Route::get('/register', function () {
    return redirect()->route('login');
})->name('register');
