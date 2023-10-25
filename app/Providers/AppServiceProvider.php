<?php

namespace App\Providers;

use App\Repositories\BrandRepository;
use App\Repositories\CompanyRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\IndustryRepository;
use App\Repositories\VatAndTaxRepository;
use App\Repositories\ProductColorRepository;
use App\Repositories\EmployeeCategoryRepository;
use App\Repositories\ProductAttributeRepository;
use App\Repositories\EmployeeDepartmentRepository;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\IndustryRepositoryInterface;
use App\Repositories\Interfaces\VatAndTaxRepositoryInterface;
use App\Repositories\Interfaces\ProductColorRepositoryInterface;
use App\Repositories\Interfaces\EmployeeCategoryRepositoryInterface;
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
            IndustryRepositoryInterface::class => IndustryRepository::class,
            VatAndTaxRepositoryInterface::class => VatAndTaxRepository::class,
            EmployeeCategoryRepositoryInterface::class => EmployeeCategoryRepository::class,
            EmployeeDepartmentRepositoryInterface::class => EmployeeDepartmentRepository::class,
            CategoryRepositoryInterface::class => CategoryRepository::class,
            BrandRepositoryInterface::class => BrandRepository::class,
            ProductAttributeRepositoryInterface::class => ProductAttributeRepository::class,
            ProductColorRepositoryInterface::class => ProductColorRepository::class,
            CompanyRepositoryInterface::class => CompanyRepository::class,
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
