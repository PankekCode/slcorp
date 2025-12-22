<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /* ADMIN */
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();
        return view('admin.pengumuman', compact('pengumuman'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        Pengumuman::create($request->all());
        return redirect()->route('admin.pengumuman')->with('success','Pengumuman ditambahkan');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->update([
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi,
            'waktu'      => $request->waktu,
            'lokasi'     => $request->lokasi,
            'ketentuan'  => $request->ketentuan,
            'peserta'    => $request->peserta,
        ]);

        // 🔴 INI YANG PENTING
        return redirect()
            ->route('admin.pengumuman.show', $pengumuman->id)
            ->with('success', 'Pengumuman berhasil diperbarui');
    }


    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.show', compact('pengumuman'));
    }

    public function destroy($id)
    {
        Pengumuman::findOrFail($id)->delete();
        return back()->with('success','Pengumuman dihapus');
    }
}
