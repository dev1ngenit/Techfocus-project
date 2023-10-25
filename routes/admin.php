<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\VatAndTaxController;
use App\Http\Controllers\Admin\ProductColorController;
use App\Http\Controllers\Admin\EmployeeCategoryController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\EmployeeDepartmentController;

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
    Route::resources(
        [
            'vat-tax'             => VatAndTaxController::class, // Repository Design Pattern  back done
            'employee-category'   => EmployeeCategoryController::class,
            'employee-department' => EmployeeDepartmentController::class,
            'category'            => CategoryController::class, // Repository Design Pattern  back done
            'brand'               => BrandController::class, // Repository Design Pattern  back done
            'product-attribute'   => ProductAttributeController::class, // back done
            'product-color'       => ProductColorController::class, // back done
            'industry'            => IndustryController::class, // Repository Design Pattern  back done
            'company'             => CompanyController::class, // Repository Design Pattern  back done
        ],
        // [
        //     'except' => array_merge(
        //         ['brand.create', 'brand.show', 'brand.edit'],
        //     )
        // ]
    );
});
