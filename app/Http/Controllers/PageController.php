<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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
}
