<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
public function index()
{
$profile = Profile::where('user_id', Auth::id())->first();
return view('user.datadiri', compact('profile'));
}


public function store(Request $request)
{
$request->validate([
'nama_lengkap' => 'required'
]);


Profile::updateOrCreate(
['user_id' => Auth::id()],
$request->all() + ['user_id' => Auth::id()]
);


return redirect()->route('user.datadiri')->with('success', 'Data berhasil disimpan');
}


public function destroy()
{
Profile::where('user_id', Auth::id())->delete();
return back()->with('success', 'Data berhasil dihapus');
}

public function edit()
{
    $profile = Auth::user()->profile;
    return view('user.datadiri-edit', [
        'profile' => $profile,
        'mode' => 'edit'
    ]);
}

}