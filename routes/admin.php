<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\BankingController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HrPolicyController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\BioMetricController;
use App\Http\Controllers\Admin\NewsTrendController;
use App\Http\Controllers\Admin\VatAndTaxController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\Admin\ProductColorController;
use App\Http\Controllers\HR\LeaveApplicationController;
use App\Http\Controllers\Admin\TermsAndPolicyController;
use App\Http\Controllers\Admin\DynamicCategoryController;
use App\Http\Controllers\Sales\SalesTeamTargetController;
use App\Http\Controllers\Sales\SalesYearTargetController;
use App\Http\Controllers\Admin\CountryStateCityController;
use App\Http\Controllers\Admin\EmployeeCategoryController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\EmployeeDepartmentController;
use App\Http\Controllers\Admin\PolicyAcknowledgmentController;

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

    Route::get('web-setting', [WebSettingController::class, 'index'])->name('web.setting');
    Route::put('seo-setting', [WebSettingController::class, 'seo'])->name('seo.setting');
    Route::put('smtp-setting', [WebSettingController::class, 'smtp'])->name('smtp.setting');

    Route::resources(
        [
            'vat-tax'               => VatAndTaxController::class,
            'employee-category'     => EmployeeCategoryController::class,
            'employee-department'   => EmployeeDepartmentController::class,
            'category'              => CategoryController::class,
            'brand'                 => BrandController::class,
            'product-attribute'     => ProductAttributeController::class, //not my work
            'product-color'         => ProductColorController::class,  
            'industry'              => IndustryController::class,

            'address'               => AddressController::class, 
            'leave-application'     => LeaveApplicationController::class, //not my work
            'dynamic-category'      => DynamicCategoryController::class,  
            'event'                 => EventController::class, 
            'faq'                   => FaqController::class, 
            'sales-year-target'     => SalesYearTargetController::class,
            'sales-team-target'     => SalesTeamTargetController::class,// done ||  

            'hr-policy'             => HrPolicyController::class, //11212023
            'policy-acknowledgment' => PolicyAcknowledgmentController::class,//not done
            'terms-and-policy'      => TermsAndPolicyController::class, // run

            'banking'               => BankingController::class,

            'attendance'            => AttendanceController::class, //not my work
        ],
        ['except' => ['create', 'show', 'edit'],]
    );
    Route::resource('contact', ContactController::class)->except(['create', 'show', 'edit'])
        ->middleware(['throttle:10,1', 'checkBan'], 'only', ['store']);

    Route::get('country-state-city', [CountryStateCityController::class, 'index'])->name('country.state.city.index');

    Route::put('country/{id}/update', [CountryStateCityController::class, 'updateCountry'])->name('country.update');
    Route::delete('country/{id}/destroy', [CountryStateCityController::class, 'destroyCountry'])->name('country.destroy');

    Route::put('state/{id}/update', [CountryStateCityController::class, 'updateState'])->name('state.update');
    Route::delete('state/{id}/destroy', [CountryStateCityController::class, 'destroyState'])->name('state.destroy');

    Route::put('city/{id}/update', [CountryStateCityController::class, 'updateCity'])->name('city.update');
    Route::delete('city/{id}/destroy', [CountryStateCityController::class, 'destroyCity'])->name('city.destroy');

    Route::get('/subscribers', [NewsletterController::class, 'index'])->name('newsletter.index');
    Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

    Route::get('/verify/{token}', [NewsletterController::class, 'verify'])->name('newsletter.verify');

    Route::get('/verified', function () {
        return view('newsletter.verified');
    })->name('newsletter.verified');

    Route::get('/verify-failed', function () {
        return view('newsletter.verify-failed');
    })->name('newsletter.verify-failed');

    Route::post('/unsubscribe', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');

    Route::resource('company', CompanyController::class)->except(['show']); // dd uncommitted changes
    Route::resource('news-trend', NewsTrendController::class)->except(['show']); // dd uncommitted changes
    // Route::resource('example', ExampleController::class)->except(['create', 'show', 'edit']); //example

    Route::get('/machine-devicesetip-index', [BioMetricController::class, 'index'])->name('attendance.dashboard');
    // Route::get('/attendance-data/single/{id}', [BioMetricController::class, 'attendanceDataSingle'])->name('attendance.single');
    Route::post('/device-setip', [BioMetricController::class, 'device_setip'])->name('machine.devicesetip');
    // Route::get('/device-information', [BioMetricController::class, 'device_information'])->name('machine.deviceinformation');
    // Route::get('/device-user-data', [BioMetricController::class, 'device_user_data'])->name('machine.deviceuserdata');
    // Route::get('/device-attendance-data', [BioMetricController::class, 'device_attendance_data'])->name('machine.deviceattendancedata');
    // Route::get('/device-adduser', [BioMetricController::class, 'device_adduser'])->name('machine.deviceadduser');
    // Route::post('/device-setuser', [BioMetricController::class, 'device_setuser'])->name('machine.devicesetuser');
    // Route::get('/device-removeuser-single/{id}', [BioMetricController::class, 'device_removeuser_single'])->name('machine.deviceremoveusersingle');
    // Route::get('/device-viewuser-single/[id]', [BioMetricController::class, 'device_viewuser_single'])->name('machine.deviceviewusersingle');
    // Route::get('/device-data/clear-attendance', [BioMetricController::class, 'device_data_clear_attendance'])->name('machine.devicedata.clear.attendance');
    // Route::get('/device-restart', [BioMetricController::class, 'device_restart'])->name('machine.devicerestart');
    // Route::get('/device-shutdown', [BioMetricController::class, 'device_shutdown'])->name('machine.deviceshutdown');
});
