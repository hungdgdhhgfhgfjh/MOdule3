<?php

namespace App\Providers;

use App\Repositories\Impl\StaffsRepositoryImpl;
use App\Services\Impl\StaffServiceImpl;
use App\Services\StaffService;
use App\Repositories\StaffsRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            StaffsRepository::class,
            StaffsRepositoryImpl::class
        );
        $this->app->singleton(
            StaffService::class,
            StaffServiceImpl::class
        );
    
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
