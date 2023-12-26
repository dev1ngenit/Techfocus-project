<?php

use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('client')->name('client.')->group(static function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('dashboard', [ClientController::class, 'dashboard'])->name('dashboard');
        Route::get('profile', [ClientController::class, 'profile'])->name('profile');
        Route::get('subscription', [ClientController::class, 'subscription'])->name('subscription');
        Route::get('favourites', [ClientController::class, 'favourites'])->name('favourites');
        Route::get('requests', [ClientController::class, 'requests'])->name('requests');

    });
});
