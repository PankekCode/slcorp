<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\LowonganAdminController;

class LowonganController extends Controller
{
    public function index()
    {
        return view('admin.lowongan');
    }
}