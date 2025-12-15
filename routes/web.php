<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataDiriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\http\Controllers\ProfileController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/datadiri2', function () {
    return view('.user.datadiri2');
})->name('datadiri2');


Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('user.dashboard');
});

Route::get('/user/datadiri', [ProfileController::class, 'index'])->name('user.datadiri');
Route::post('/user/datadiri', [ProfileController::class, 'store'])->name('user.datadiri.store');
Route::get('/datadiri/edit', [ProfileController::class, 'edit'])->name('user.datadiri.edit');
Route::post('/datadiri/update', [ProfileController::class, 'update'])->name('user.datadiri.update');
Route::delete('/user/datadiri', [ProfileController::class, 'destroy'])->name('user.datadiri.delete');

Route::get('/lowongan', function () {
    return view('user.lowongan');
})->name('lowongan')->middleware('auth');

Route::get('/pengumuman', function () {
    return view('user.pengumuman');
})->name('pengumuman')->middleware('auth');