<?php

use Illuminate\Support\Facades\Route;

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

// Cara membuat rouute untuk frontend tanpa membuat controlle dan model

// Route::get('informasi', function() {
//     return view('informasi');
// });

// untuk return view adalah nama dari halaman blade