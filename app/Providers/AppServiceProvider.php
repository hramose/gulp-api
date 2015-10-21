<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Add namespaces for our views
        $this->app['view']->addNamespace('Admin', base_path() . '/resources/views/admin');
        $this->app['view']->addNamespace('Client', base_path() . '/resources/views/client');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
