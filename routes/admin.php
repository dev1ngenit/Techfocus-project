<?php

use App\Http\Controllers\Admin\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DynamicCategoryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\VatAndTaxController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\Admin\ProductColorController;
use App\Http\Controllers\Admin\EmployeeCategoryController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\EmployeeDepartmentController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\HR\LeaveApplicationController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('administrator')->name('admin.')->group(static function () {

    // Guest routes
    Route::middleware('guest:admin')->group(static function () {
        // Auth routes
        Route::get('login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store']);
        // Forgot password
        Route::get('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'create'])->name('password.request');
        Route::post('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'store'])->name('password.email');
        // Reset password
        Route::get('reset-password/{token}', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'create'])->name('password.reset');
        Route::post('reset-password', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'store'])->name('password.update');
    });

    // Verify email routes
    Route::middleware(['auth:admin'])->group(static function () {
        Route::get('verify-email', [\App\Http\Controllers\Admin\Auth\EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
        Route::get('verify-email/{id}/{hash}', [\App\Http\Controllers\Admin\Auth\VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
        Route::post('email/verification-notification', [\App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    });

    // Authenticated routes
    Route::middleware(['auth:admin', 'verified'])->group(static function () {
        // Confirm password routes
        Route::get('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'show'])->name('password.confirm');
        Route::post('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'store']);
        // Logout route
        Route::post('logout', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
        // General routes
        Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
        Route::get('profile', [\App\Http\Controllers\Admin\HomeController::class, 'profile'])->name('profile');
        Route::get('profile/setting', [\App\Http\Controllers\Admin\HomeController::class, 'profileSetting'])->middleware('password.confirm.admin')->name('profile.setting');
    });

    Route::put('seo/setting', [WebSettingController::class, 'seo'])->name('seo.setting');
    Route::put('smtp/setting', [WebSettingController::class, 'smtp'])->name('smtp.setting');

    Route::resources(
        [
            'vat-tax'             => VatAndTaxController::class,
            'employee-category'   => EmployeeCategoryController::class,
            'employee-department' => EmployeeDepartmentController::class,
            'category'            => CategoryController::class,
            'brand'               => BrandController::class,
            'product-attribute'   => ProductAttributeController::class,
            'product-color'       => ProductColorController::class,
            'industry'            => IndustryController::class,
            'company'             => CompanyController::class,
            'address'             => AddressController::class,
            'leave-application'   => LeaveApplicationController::class,
            'dynamic-category'    => DynamicCategoryController::class, // gg
            'event'               => EventController::class, // gg
        ],
        ['except' => ['create', 'show', 'edit'],]
    );
    Route::resource('contact', ContactController::class)->except(['create', 'show', 'edit'])
        ->middleware(['throttle:10,1', 'checkBan'], 'only', ['store']); // gg
    // Route::resource('contact', ContactController::class)->except(['create', 'show', 'edit']); 
});
