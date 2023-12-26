<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


require __DIR__ . '/frontend.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/client.php';

// Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])
//     ->name('index');
// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::get('profile', [\App\Http\Controllers\SiteController::class, 'profile'])
//         ->middleware('password.confirm')
//         ->name('profile');
// });
