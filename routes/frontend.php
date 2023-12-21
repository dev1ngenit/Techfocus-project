<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;


Route::get('/', [HomeController::class, 'homePage'])->name('homepage');
Route::get('solution/details', [HomeController::class, 'solutionDetails'])->name('solution.details');

// Brand Pages
Route::controller(PageController::class)->group(function () {
    Route::get('/single/product/{id}', 'productDetails')->name('product.details');
    Route::get('/{id}/overview', 'overview')->name('brand.overview');
    Route::get('/{id}/products', 'brandProducts')->name('brand.products');
    Route::get('/{id}/pdfs', 'brandPdf')->name('brand.pdf');
    Route::get('/{id}/contents', 'content')->name('brand.content');
    // Route::get('/{id}/contents/{id}/details', 'blogDetails')->name('brand.content.details.blog');
    // Route::get('/{id}/contents/{id}/details', 'storyDetails')->name('brand.content.details.story');
    Route::get('/{slug}/products', 'ajaxBrandProductsPagination')->name('brand.products.pagination');
});



