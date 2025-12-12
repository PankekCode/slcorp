<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loginPage(): View
    {
        return view('auth.login');
    }
    
    public function registerPage(): View
    {
        return view('auth.register');
    }

    public function login(Request $request): void
    {
        // proses validasi login
    }
}