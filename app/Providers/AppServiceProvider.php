<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        Password::defaults(function () {
            return Password::min(8)
                ->mixedCase()
                ->symbols()
                ->uncompromised();
        });
    }
}
