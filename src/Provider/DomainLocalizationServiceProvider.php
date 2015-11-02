<?php

namespace BastienDonjon\DomainLocalization\Provider;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

/**
 * Class DomainLocalizationServiceProvider
 * @package BastienDonjon\DomainLocalization\Provider
 */
class DomainLocalizationServiceProvider extends ServiceProvider
{
    /**
     * @param Kernel $kernel
     */
    public function boot(Kernel $kernel)
    {
        $kernel->pushMiddleware('BastienDonjon\DomainLocalization\Middleware\DomainLocalizationMiddleware');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('domain-localization.php'),
        ], 'config');
    }
}
