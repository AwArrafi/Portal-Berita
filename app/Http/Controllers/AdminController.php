<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function beritaIndex()
    {
        $berita = Berita::latest()->paginate(10);

        return view('admin.berita.index', compact('berita'));
    }
}
