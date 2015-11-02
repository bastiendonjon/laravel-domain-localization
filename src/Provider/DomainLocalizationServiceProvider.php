<?php

namespace BastienDonjon\DomainLocalization\Provider;

use Illuminate\Support\ServiceProvider;

class DomainLocalizationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['router']->middleware('middlewareName', 'BastienDonjon\DomainLocalization\Middleware\DomainLocalizationMiddleware');
    }
}
