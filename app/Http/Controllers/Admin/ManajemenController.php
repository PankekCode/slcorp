<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ManajemenAdminController;

class ManajemenController extends Controller
{
    public function index()
    {
        return view('admin.manajemen');
    }
}