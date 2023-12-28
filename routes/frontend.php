<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Frontend\PageController;

Route::get('/', [SiteController::class, 'homePage'])->name('homepage');
Route::get('solution/details', [SiteController::class, 'solutionDetails'])->name('solution.details');
Route::get('category/{slug}', [SiteController::class, 'category'])->name('category');
Route::get('catalog/all', [SiteController::class, 'allCatalog'])->name('catalog.all');
Route::get('faq', [SiteController::class, 'faq'])->name('faq');
Route::get('rfq', [SiteController::class, 'rfq'])->name('rfq');
Route::get('contact', [SiteController::class, 'contact'])->name('contact');
Route::get('terms', [SiteController::class, 'terms'])->name('terms');
Route::get('about-us', [SiteController::class, 'about'])->name('about');
Route::get('services', [SiteController::class, 'service'])->name('service');
Route::get('subscription', [SiteController::class, 'subscription'])->name('subscription');
Route::get('brand/list', [SiteController::class, 'brandList'])->name('brand.list');
Route::get('sourcing/guide', [SiteController::class, 'sourcingGuide'])->name('sourcing.guide');
Route::get('buying/guide', [SiteController::class, 'buyingGuide'])->name('buying.guide');
Route::get('exhibit', [SiteController::class, 'exhibit'])->name('exhibit');
Route::get('manufacturer/account', [SiteController::class, 'manufacturerAccount'])->name('manufacturer.account');
Route::get('category/{slug}/products', [SiteController::class, 'filterProducts'])->name('filtering.products');

// Brand Pages
Route::middleware('web')->group(function () {
    Route::get('/{slug}/overview', [PageController::class, 'overview'])->name('brand.overview');
    Route::get('/single/product/{slug}', [PageController::class, 'productDetails'])->name('product.details');
    Route::get('/{slug}/brochures', [PageController::class, 'brandPdf'])->name('brand.pdf');
    Route::get('/{slug}/products', [PageController::class, 'brandProducts'])->name('brand.products');
    Route::get('/catalogue-pdf/{slug}', [PageController::class, 'pdfDetails'])->name('pdf.details');
    Route::get('/{slug}/contents', [PageController::class, 'content'])->name('brand.content');
    Route::get('/contents/{slug}', [PageController::class, 'contentDetails'])->name('content.details');
    // Route::get('/{slug}/products', [PageController::class, 'ajaxBrandProductsPagination'])->name('brand.products.pagination');
});