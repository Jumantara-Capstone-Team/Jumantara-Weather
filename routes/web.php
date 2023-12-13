<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    BerandaController,
    AuthController,
    PostController,
    WeatherController,
    QualityController,
    RadarController,
    DashboardPostController,
    DashboardQualityController,
    SearchController
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

// Route Beranda/Main

Route::get('/', [BerandaController::class, 'index']);

// Route News
Route::get('/berita', [PostController::class, 'index'])->name('berita.index');
Route::get('/berita/{category}', [PostController::class, 'index'])->name('berita.category');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/berita/search','PostController@search')->name('berita.search');


Route::fallback(function () {
    return view('error/404');
});

Route::get('/search', [SearchController::class, 'index']);

// Weather Controller
Route::get('/weather', [WeatherController::class, 'index']);

// Route Radar
Route::get('/radar', [RadarController::class, 'index']);

// Route Air Quality
Route::get('/quality', [QualityController::class, 'index']);
Route::get('/quality/{quality:slug}', [QualityController::class, 'show']);


// Login Route
Route::get('login', fn() => view('login.login', ["title" => "Login"]))->name('login');
Route::post('login', [AuthController::class, 'login']);

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', fn() => view('admin.dashboard', ["title" => "Dashboard"]))->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});


// Admin Details Route
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/activity', [AuthController::class, 'activity'])->name('activity');
Route::get('/settings', [AuthController::class, 'settings'])->name('settings');
Route::get('/activity', [PostController::class, 'showNotifications'])->name('activity');

// Admin Auth Route
Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
        Route::resource('posts', DashboardPostController::class);
        Route::get('quality/checkSlug', [DashboardQualityController::class, 'checkSlug']);
        Route::resource('quality', DashboardQualityController::class);
    });
});