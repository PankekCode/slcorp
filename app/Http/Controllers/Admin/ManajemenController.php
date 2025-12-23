<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManajemenController extends Controller
{
    public function index()
    {
        $admins = User::with('profile')->latest()->get();
        return view('admin.manajemen', compact('admins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Profile::create([
            'user_id' => $user->id,
            'nama_lengkap' => $request->nama_lengkap,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('admin.manajemen')
            ->with('success', 'Admin berhasil ditambahkan');
    }

    public function edit($id)
    {
        $admin = User::with('profile')->findOrFail($id);
        return view('admin.manajemen-edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = User::with('profile')->findOrFail($id);

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
        ]);

        $admin->update([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
        ]);

        if ($admin->profile) {
            $admin->profile->update([
                'nama_lengkap' => $request->nama_lengkap,
                'agama' => $request->agama,
                'no_hp' => $request->no_hp,
            ]);
        } else {
            Profile::create([
                'user_id' => $admin->id,
                'nama_lengkap' => $request->nama_lengkap,
                'agama' => $request->agama,
                'no_hp' => $request->no_hp,
            ]);
        }

        return redirect()->route('admin.manajemen.edit', $admin->id)
            ->with('success', 'Data admin berhasil diperbarui');
    }

    public function destroy($id)
    {
        $admin = User::with('profile')->findOrFail($id);

        if ($admin->profile) {
            $admin->profile->delete();
        }

        $admin->delete();

        return redirect()->route('admin.manajemen')
            ->with('success', 'Admin berhasil dihapus');
    }

    // ================= RESET PASSWORD =================
    public function resetForm($id)
    {
        $admin = User::with('profile')->findOrFail($id);
        return view('admin.reset-password', compact('admin'));
    }

    public function resetPassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        $admin = User::findOrFail($id);
        $admin->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.manajemen.reset.success');
    }

    public function resetSuccess()
    {
        return view('admin.reset-password-success');
    }
}