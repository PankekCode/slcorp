<?php

use App\Http\Controllers\DashboardController as UserDashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\http\Controllers\ProfileController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\ManajemenController;
use App\Http\Controllers\Admin\LowonganController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\LowonganController as UserLowonganController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])
        ->name('user.dashboard');

      Route::get('/password/edit', [PasswordController::class, 'edit'])
        ->name('password.edit');

    Route::post('/password/update', [PasswordController::class, 'update'])
        ->name('password.update');

    Route::get('/password/success', [PasswordController::class, 'success'])
        ->name('password.success');

});


Route::middleware(['auth'])->group(function () {
        Route::get('/user/datadiri', [ProfileController::class, 'index'])->name('user.datadiri');
        Route::post('/user/datadiri', [ProfileController::class, 'store'])->name('user.datadiri.store');
        Route::get('/datadiri-edit', [ProfileController::class, 'edit'])->name('user.datadiri.edit');
        Route::get('/datadiri', [ProfileController::class, 'show'])->name('user.datadiri');
        Route::put('/datadiri/update', [ProfileController::class, 'update'])->name('user.datadiri.update');
        Route::delete('/user/datadiri', [ProfileController::class, 'destroy'])->name('user.datadiri.delete');
});


Route::middleware('auth')->group(function () {
    Route::get('/lowongan', [UserLowonganController::class, 'index'])
        ->name('user.lowongan');

    Route::get('/lowongan/{id}', [UserLowonganController::class, 'show'])
        ->name('user.lowongan.detail');
});

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
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('/lowongan', [LowonganController::class, 'index'])->name('admin.lowongan');
    Route::get('/lowongan/create', [LowonganController::class, 'create'])->name('admin.lowongan.create');
    Route::post('/lowongan', [LowonganController::class, 'store'])->name('admin.lowongan.store');
    Route::delete('/lowongan/{id}', [LowonganController::class, 'destroy'])->name('admin.lowongan.destroy');
    Route::get('/lowongan/{id}/edit', [LowonganController::class, 'edit'])
        ->name('lowongan.edit');

    Route::put('/lowongan/{id}', [LowonganController::class, 'update'])
        ->name('lowongan.update');
});

Route::get('/admin/pengumuman', function () {
    return view('admin.pengumuman', [PengumumanController::class, 'index']);
})->name('admin.pengumuman');

Route::get('/admin/manajemen', function () {
    return view('admin.manajemen', [PengumumanController::class, 'index']);
})->name('admin.manajemen');

Route::prefix('admin')->group(function () {
    Route::get('/faq', [FaqController::class, 'index'])->name('admin.faq');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('admin.faq.create');
    Route::post('/faq', [FaqController::class, 'store'])->name('admin.faq.store');
    Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('admin.faq.destroy');
    Route::get('/faq/{id}/edit', [FaqController::class, 'edit'])->name('faq.edit');
    Route::put('/faq/{id}', [FaqController::class, 'update'])->name('faq.update');
});

Route::prefix('admin')->group(function () {
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('admin.pengumuman');
    Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('admin.pengumuman.create');
    Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('admin.pengumuman.store');
    Route::get('/pengumuman/{id}/edit', [PengumumanController::class, 'edit'])->name('admin.pengumuman.edit');
    Route::put('/pengumuman/{id}', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');
    Route::delete('/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');
    Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('admin.pengumuman.show');
});
