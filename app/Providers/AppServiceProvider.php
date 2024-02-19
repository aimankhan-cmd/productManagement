<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

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
        // apply this bechause mysql support string length
        // when  i do migrate first time code give me error in my terminal so i applied this line of code to initial initiliaze
        Schema::defaultStringLength(191);
    }
}
