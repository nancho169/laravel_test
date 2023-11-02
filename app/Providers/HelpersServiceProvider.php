<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        require_once app_path().'/Helpers/Helpers.php';
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
