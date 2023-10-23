<?php

namespace App\Providers;

use App\Repositories\BrandRepository;
use App\Repositories\CompanyRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\IndustryRepository;
use App\Repositories\VatAndTaxRepository;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\IndustryRepositoryInterface;
use App\Repositories\Interfaces\VatAndTaxRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IndustryRepositoryInterface::class, IndustryRepository::class);
        $this->app->bind(VatAndTaxRepositoryInterface::class, VatAndTaxRepository::class);
        // $this->app->bind(EmployeeCategoryRepositoryInterface::class, EmployeeCategoryRepository::class);
        // $this->app->bind(EmployeeDepartmentRepositoryInterface::class, EmployeeDepartmentRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
        // $this->app->bind(ProductAttributeRepositoryInterface::class, ProductAttributeRepository::class);
        // $this->app->bind(ProductColorRepositoryInterface::class, ProductColorRepository::class);
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepository::class);
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
