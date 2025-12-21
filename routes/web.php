<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataDiriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\http\Controllers\ProfileController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LowonganAdminController;
use App\Http\Controllers\PengumumanAdminController;
use App\Http\Controllers\ManajemenAdminController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard-admin');

Route::get('/lowongan/barista', function () {
    return view('user.lowongan-barista');
})->name('barista');

Route::get('/lowongan/chef', function () {
    return view('user.lowongan-chef');
})->name('chef');

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('user.dashboard');

      Route::get('/password/edit', [PasswordController::class, 'edit'])
        ->name('password.edit');

    Route::post('/password/update', [PasswordController::class, 'update'])
        ->name('password.update');

    Route::get('/password/success', [PasswordController::class, 'success'])
        ->name('password.success');

});

Route::get('/datadiri', [ProfileController::class, 'index'])
    ->name('user.datadiri');

Route::post('/datadiri', [ProfileController::class, 'store'])
    ->name('user.datadiri.store');

Route::get('/datadiri/edit', [ProfileController::class, 'edit'])
    ->name('user.datadiri.edit');

Route::put('/datadiri/update', [ProfileController::class, 'update'])
    ->name('user.datadiri.update');

Route::delete('/datadiri/delete', [ProfileController::class, 'destroy'])
    ->name('user.datadiri.delete');



Route::get('/lowongan', function () {
    return view('user.lowongan');
})->name('lowongan')->middleware('auth');

Route::get('/pengumuman', function () {
    return view('user.pengumuman');
})->name('pengumuman')->middleware('auth');

Route::get('/faq', function () {
    return view('user.faq');
})->name('faq')->middleware('auth');

Route::middleware('auth')->prefix('profile')->group(function () {
    Route::get('/', [EditProfileController::class, 'index'])
        ->name('user.profile');

    Route::get('/edit', [EditProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::post('/update', [EditProfileController::class, 'update'])
        ->name('profile.update');
    Route::post('/profile/photo', [EditProfileController::class, 'updatePhoto'])
    ->name('profile.photo');
})->name('user.profile');

Route::get('/pengumuman-detail', function () {
    return view('user.pengumuman-detail');
})->name('pengumuman.detail');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');
});

Route::get('/admin/lowongan', function () {
    return view('admin.lowongan', [LowonganController::class, 'index']);
})->name('admin.lowongan');

Route::get('/admin/pengumuman', function () {
    return view('admin.pengumuman', [PengumumanController::class, 'index']);
})->name('admin.pengumuman');

Route::get('/admin/manajemen', function () {
    return view('admin.manajemen', [PengumumanController::class, 'index']);
})->name('admin.manajemen');