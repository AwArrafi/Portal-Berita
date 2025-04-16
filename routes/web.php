<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/otherNews', function () {
    return view('otherNews');
})->name('otherNews');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/news', [NewsApiController::class, 'getNews'])->name('news');
