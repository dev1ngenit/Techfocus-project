<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homePage'])->name('homepage');
Route::get('solution/details', [HomeController::class, 'solutionDetails'])->name('solution.details');



