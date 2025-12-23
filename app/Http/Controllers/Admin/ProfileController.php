<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
        $profile = $admin->profile;

        return view('admin.profile.index', compact('admin', 'profile'));
    }

    public function edit()
    {
        $admin = Auth::user();
        $profile = $admin->profile;

        return view('admin.profile.edit', compact('admin', 'profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_lengkap'   => 'required',
            'agama'          => 'nullable',
            'no_hp'          => 'nullable',
            'tanggal_lahir'  => 'nullable|date',
            'alamat'         => 'nullable',
        ]);

        $admin = Auth::user();
        $admin->profile->update($request->all());

        return redirect()->route('admin.profile')
            ->with('success', 'Profile admin berhasil diperbarui');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $path = $request->file('foto')->store('profile', 'public');

        $admin = Auth::user();
        $admin->foto = $path;
        $admin->save();

        return back()->with('success', 'Foto profile berhasil diubah');
    }
}
