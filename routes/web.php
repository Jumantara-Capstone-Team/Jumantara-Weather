<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
        PostController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

// Route News
Route::get('/berita', [PostController::class, 'index'])->name('berita.index');
Route::get('/berita/{category}', [PostController::class, 'index'])->name('berita.category');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/berita/search', [PostController::class, 'search'])->name('berita.search');

// Cara membuat rouute untuk frontend tanpa membuat controlle dan model

// Route::get('informasi', function() {
//     return view('informasi');
// });

// untuk return view adalah nama dari halaman blade

Route::fallback(function () {
    return view('error/404');
});

// Login Route
Route::get('login', fn() => view('login.login', ["title" => "Login"]))->name('login');
Route::post('login', [AuthController::class, 'login']);

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', fn() => view('admin.dashboard', ["title" => "Dashboard"]))->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
