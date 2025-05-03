<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KomentarController;

Route::get('/', [NewsApiController::class, 'getNews'])->name('home');

Route::get('/news', [PageController::class, 'news'])->name('news');

Route::get('/otherNews', [PageController::class, 'otherNews'])->name('otherNews');

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home'); // Ganti dengan halaman yang sesuai
})->middleware('auth')->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', [NewsApiController::class, 'getNews'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'show'])->name('profile');
    // Route::post('/profile/update', [UserController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-username', [UserController::class, 'updateUsername'])->name('profile.updateUsername');
    Route::post('/profile/update-avatar', [UserController::class, 'updateAvatar'])->name('profile.updateAvatar');
    Route::post('/profile/update-password', [UserController::class, 'updatePassword'])->name('profile.updatePassword');
});

Route::middleware('auth')->group(function () {
    Route::post('/komentar', [KomentarController::class, 'store'])->name('komentar.store');
    Route::delete('/komentar/delete/{id},{section}', [KomentarController::class, 'destroy'])->name('komentar.delete');
});
