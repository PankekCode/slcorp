<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{


public function update(Request $request)
{
    
    $request->validate([
        'nik' => 'required|string|max:20',
        'nama_lengkap' => 'required|string|max:255',
        'tempat_lahir' => 'required|string|max:100',
        'tanggal_lahir' => 'required|date',
        'no_hp' => 'required|string|max:15',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'agama' => 'required|string',
        'alamat' => 'required|string',
        'pendidikan' => 'required|string',
    ]);

    $user = Auth::user();

    $user->profile()->updateOrCreate(
        ['user_id' => $user->id],
        $request->only([
            'nik',
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            'no_hp',
            'jenis_kelamin',
            'agama',
            'alamat',
            'pendidikan'
        ])
    );

    return redirect()
        ->route('user.datadiri')
        ->with('success', 'Data diri berhasil diperbarui');
}


public function index()
{
$profile = Profile::where('user_id', Auth::id())->first();
return view('user.datadiri', compact('profile'));
}

public function destroy()
{
Profile::where('user_id', Auth::id())->delete();
return back()->with('success', 'Data berhasil dihapus');
}

public function show()
{
    return view('user.datadiri', [
        'profile' => Auth::user()->profile,
        'mode' => 'view'
    ]);
}


public function edit()
{
    $profile = Auth::user()->profile;
    return view('user.datadiri-edit', [
        'profile' => Auth::user()->profile,
        'mode' => 'edit'
    ]);
}

}