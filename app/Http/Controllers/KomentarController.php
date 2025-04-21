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
}
