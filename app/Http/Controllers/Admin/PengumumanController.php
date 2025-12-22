<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('admin.pengumuman');
    }
}