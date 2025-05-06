<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Berita;

class PageController extends Controller
{
    public function news()
    {
        return view('news');
    }

    public function home()
    {
        return view('home');
    }

    public function otherNews()
    {
        return view('otherNews');
    }

    public function forum()
    {
        return view('forum');
    }

    public function about()
    {
        return view('about');
    }


    // public function show($id)
    // {
    //     $berita = Berita::findOrFail($id);
    //     return view('news.show', compact('berita'));
    // }
}
