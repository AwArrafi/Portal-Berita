<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'komentar' => 'required|string|max:1000',
        ]);

        Komentar::create([
            'user_id' => Auth::id(),
            'komentar' => $request->komentar,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim!');
    }

    public function destroy($id, $section)
    {
        // Ambil komentar berdasarkan ID
        $komentar = Komentar::findOrFail($id);

        // Pastikan komentar yang akan dihapus milik pengguna yang sedang login
        if ($komentar->user_id !== Auth::id()) {
            return back()->with('error', 'Anda tidak memiliki izin untuk menghapus komentar ini.');
        }

        // Hapus komentar
        $komentar->delete();

        // Redirect kembali ke halaman yang sesuai
        return redirect()->route($section)->with('success', 'Komentar berhasil dihapus!');
    }
}
