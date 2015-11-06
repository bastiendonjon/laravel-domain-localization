<?php

namespace BastienDonjon\DomainLocalization;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

/**
 * Class DomainLocalizationServiceProvider
 * @package BastienDonjon\DomainLocalization
 */
class DomainLocalizationServiceProvider extends ServiceProvider
{
    /**
     * @param Kernel $kernel
     */
    public function boot(Kernel $kernel)
    {
        $kernel->pushMiddleware('BastienDonjon\DomainLocalization\DomainLocalizationMiddleware');

        $this->publishes([
            __DIR__ . '/config.php' => config_path('domain-localization.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
