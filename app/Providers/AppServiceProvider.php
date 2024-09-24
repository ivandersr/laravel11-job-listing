<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        //\Illuminate\Database\Eloquent\Model::preventLazyLoading(); <-- disable lazy loading
        // Paginator::useBootstrapFive(); <-- php artisan vendor:publish --tag=laravel-pagination, to enable custom paginator (in this case, using bootstrap 5)
    }
}
