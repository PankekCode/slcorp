<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/datadiri', function () {
    return view('datadiri');
})->name('datadiri')->middleware('auth');

Route::get('/lowongan', function () {
    return view('lowongan');
})->name('lowongan')->middleware('auth');