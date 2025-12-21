<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    // READ (tampilkan data)
    public function index()
    {
        $lowongans = Lowongan::all();
        return view('admin.lowongan', compact('lowongans'));
    }

    // CREATE (form tambah)
    public function create()
    {
        return view('admin.lowongan-create');
    }

    // STORE (simpan ke database)
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
        ]);

        Lowongan::create($request->all());

        return redirect()->route('admin.lowongan')
            ->with('success', 'Lowongan berhasil ditambahkan');
    }

    // DELETE
    public function destroy($id)
    {
        Lowongan::findOrFail($id)->delete();
        return back()->with('success', 'Lowongan berhasil dihapus');
    }
// EDIT
    public function edit($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('admin.lowongan-edit', compact('lowongan'));
    }

// UPDATE DATA
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
        ]);

        $lowongan = Lowongan::findOrFail($id);
        $lowongan->update($request->all());

        return redirect()->route('admin.lowongan')
            ->with('success', 'Lowongan berhasil diperbarui');
    }
}
