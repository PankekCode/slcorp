<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditprofileController extends Controller
{
    public function index()
    {
        return view('user.profile', [
            'user' => Auth::user()
        ]);
    }

    public function edit()
    {
        return view('user.profile-edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        // logic update profile
    }

   public function updatePhoto(Request $request)
{
    $request->validate([
        'photo' => 'image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $user = auth()->user();

    $filename = time().'.'.$request->photo->extension();
    $request->photo->storeAs('profile', $filename, 'public');

    $user->photo = $filename;
    $user->save();

    return back();
}

}