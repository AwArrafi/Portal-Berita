<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KomentarController;


Route::get('/', [NewsApiController::class, 'getNews'])->name('home');

// Rute untuk Menampilkan Halaman Berita (News)
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{id}', [NewsApiController::class, 'show'])->name('news.show');

// Rute untuk Halaman Lainnya
Route::get('/otherNews', [PageController::class, 'otherNews'])->name('otherNews');
Route::get('/about', function () {
    return view('about');
});

// Rute untuk Halaman Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk Halaman Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rute yang Diperlukan untuk Komentar
Route::middleware('auth')->group(function () {
    Route::post('/komentar', [KomentarController::class, 'store'])->name('komentar.store');
    Route::delete('/komentar/delete/{id}/{section}', [KomentarController::class, 'destroy'])->name('komentar.delete');
});

// Rute Profile dengan Middleware Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'show'])->name('profile');
    Route::post('/profile/update-username', [UserController::class, 'updateUsername'])->name('profile.updateUsername');
    Route::post('/profile/update-avatar', [UserController::class, 'updateAvatar'])->name('profile.updateAvatar');
    Route::post('/profile/update-password', [UserController::class, 'updatePassword'])->name('profile.updatePassword');
});
