<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Tampilkan halaman profil
     */
    public function show()
    {
        return view('profile');
    }

    /**
     * Update username pengguna yang sedang login
     */
    public function updateUsername(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Validasi username
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
        ]);

        // Update username
        $user->username = $request->username;
        $user->save();  // Menyimpan perubahan username

        return redirect()->route('profile')->with('success', 'Username updated successfully!');
    }

    /**
     * Update password pengguna yang sedang login
     */
    public function updatePassword(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();  // Mendapatkan user yang sedang login

        // Validasi password
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Cek apakah password lama cocok
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai.']);
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();  // Menyimpan perubahan password

        return redirect()->route('profile')->with('success', 'Password updated successfully!');
    }
}
