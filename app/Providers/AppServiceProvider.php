<?php

namespace App\Providers;

use App\Repositories\FaqRepository;
use App\Repositories\SeoRepository;
use App\Repositories\SmtpRepository;
use App\Repositories\BrandRepository;
use App\Repositories\EventRepository;
use App\Repositories\AddressRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\ContactRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\IndustryRepository;
use App\Repositories\VatAndTaxRepository;
use App\Repositories\ProductColorRepository;
use App\Repositories\DynamicCategoryRepository;
use App\Repositories\EmployeeCategoryRepository;
use App\Repositories\LeaveApplicationRepository;
use App\Repositories\ProductAttributeRepository;
use App\Repositories\EmployeeDepartmentRepository;
use App\Repositories\Interfaces\FaqRepositoryInterface;
use App\Repositories\Interfaces\SeoRepositoryInterface;
use App\Repositories\Interfaces\SmtpRepositoryInterface;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Repositories\Interfaces\AddressRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\IndustryRepositoryInterface;
use App\Repositories\Interfaces\VatAndTaxRepositoryInterface;
use App\Repositories\Interfaces\ProductColorRepositoryInterface;
use App\Repositories\Interfaces\DynamicCategoryRepositoryInterface;
use App\Repositories\Interfaces\EmployeeCategoryRepositoryInterface;
use App\Repositories\Interfaces\LeaveApplicationRepositoryInterface;
use App\Repositories\Interfaces\ProductAttributeRepositoryInterface;
use App\Repositories\Interfaces\EmployeeDepartmentRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $bindings = [
            EmployeeDepartmentRepositoryInterface::class => EmployeeDepartmentRepository::class,
            EmployeeCategoryRepositoryInterface::class => EmployeeCategoryRepository::class,
            ProductAttributeRepositoryInterface::class => ProductAttributeRepository::class,
            LeaveApplicationRepositoryInterface::class => LeaveApplicationRepository::class,
            DynamicCategoryRepositoryInterface::class => DynamicCategoryRepository::class,
            ProductColorRepositoryInterface::class => ProductColorRepository::class,
            VatAndTaxRepositoryInterface::class => VatAndTaxRepository::class,
            IndustryRepositoryInterface::class => IndustryRepository::class,
            CategoryRepositoryInterface::class => CategoryRepository::class,
            CompanyRepositoryInterface::class => CompanyRepository::class,
            AddressRepositoryInterface::class => AddressRepository::class,
            ContactRepositoryInterface::class => ContactRepository::class,
            EventRepositoryInterface::class => EventRepository::class,
            BrandRepositoryInterface::class => BrandRepository::class,
            SmtpRepositoryInterface::class => SmtpRepository::class,
            SeoRepositoryInterface::class => SeoRepository::class,
            FaqRepositoryInterface::class => FaqRepository::class,
        ];

        foreach ($bindings as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
