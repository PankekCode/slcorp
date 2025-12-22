<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ManajemenController extends Controller
{
    public function index()
    {
        return view('admin.manajemen');
    }
}