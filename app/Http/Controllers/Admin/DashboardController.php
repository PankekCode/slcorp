<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;

class DashboardController extends Controller
{
    public function index()
    {
        $lowongans = Lowongan::latest()->get();

        return view('admin.dashboard', compact('lowongans'));
    }
}
