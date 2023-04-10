<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * 
     * @return void
     */
    public function register(): void
    {
        //
        // if($this->app->enviroment('production')){
        //     URL::forceScheme('https');
        // }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginacion de los registros
        Paginator::useBootstrap();
    }
}
