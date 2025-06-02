<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komentar;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Komentar::with('user')->latest()->get(); // eager load relasi user
        return view('admin.comments.index', compact('comments'));
    }


    public function destroy($id)
    {
        Komentar::destroy($id);
        return redirect()->route('admin.comments.index')->with('success', 'Komentar berhasil dihapus.');
    }
}
