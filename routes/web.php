<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/', [NewsApiController::class, 'getNews'])->name('home');

// Rute untuk Menampilkan Halaman Berita (News)
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{id}', [NewsApiController::class, 'show'])->name('news.show');

Route::get('/otherNews', [NewsApiController::class, 'getOtherNews'])->name('otherNews');
Route::get('/othernews', [NewsApiController::class, 'getNews'])->name('news.getNews');

Route::get('/load-more-other-news', [NewsApiController::class, 'getOtherNews'])->name('otherNews.ajax');
Route::get('/load-other-news', [NewsApiController::class, 'loadMoreOtherNews'])->name('otherNews.load');

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

// ADMIN
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('berita', \App\Http\Controllers\Admin\BeritaController::class);

    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/debug', function () {
    return 'Server Running!';
});

Route::get('/laravel-log', function () {
    return nl2br(file_get_contents(storage_path('logs/laravel.log')));
});

// USER
// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/home', [UserController::class, 'home'])->name('home');
// });
