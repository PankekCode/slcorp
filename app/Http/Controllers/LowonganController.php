<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    // Tampilkan semua lowongan ke user
    public function index()
    {
        $lowongans = Lowongan::all(); // ambil dari DB
        return view('user.lowongan', compact('lowongans'));
    }

    // Detail lowongan
    public function show($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('user.lowongan-detail', compact('lowongan'));
    }
}
