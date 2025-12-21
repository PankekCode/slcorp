<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\PengumumanAdminController;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('admin.pengumuman');
    }
}