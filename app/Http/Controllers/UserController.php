<?php

namespace App\Http\Controllers;

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
    public function update(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Validasi username (hanya jika diubah)
        if ($request->filled('username') && $request->username !== $user->username) {
            $request->validate([
                'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            ]);
            $user->username = $request->username;
        }

        // Validasi password (jika ingin diubah)
        if ($request->filled('current_password') || $request->filled('new_password')) {
            $request->validate([
                'current_password' => ['required'],
                'new_password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Password lama tidak sesuai.']);
            }

            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated!');
    }
}
