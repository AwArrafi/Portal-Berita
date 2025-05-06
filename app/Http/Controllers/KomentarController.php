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
            'berita_id' => 'required|exists:berita,id',
        ]);

        Komentar::create([
            'berita_id' => $request->berita_id,
            'user_id' => Auth::id(),
            'komentar' => $request->komentar,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim!');
    }

    public function destroy($id, $section, Request $request)
    {
        // Ambil komentar berdasarkan ID
        $komentar = Komentar::findOrFail($id);

        // Pastikan komentar yang akan dihapus milik pengguna yang sedang login
        if ($komentar->user_id == $request->user()->id) {
            $beritaId = $komentar->berita_id; // simpan berita id sebelum delete
            $komentar->delete();

            return redirect()->route('news.show', ['id' => $beritaId])
                ->with('success', 'Komentar berhasil dihapus.');
        }

        // Jika bukan pemilik komentar, kita redirect kembali ke news.show (tanpa hapus)
        return redirect()->route('news.show', ['id' => $komentar->berita_id])
            ->with('error', 'Anda tidak memiliki izin untuk menghapus komentar ini.');
    }
}
