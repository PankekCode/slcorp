<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Lowongan;



class DashboardController extends Controller
{
    public function index()
    {
        $lowongans = Lowongan::latest()->get();

        return view('user.dashboard', compact('lowongans'));
    }
}

