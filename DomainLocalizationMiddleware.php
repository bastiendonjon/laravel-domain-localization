<?php

namespace BastienDonjon\DomainLocalization;

use BastienDonjon\DomainLocalization\DomainLocalization;
use Closure;

/**
 * Class DomainLocalizationMiddleware
 * @package BastienDonjon\DomainLocalization
 */
class DomainLocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        new DomainLocalization($request, config('domain-localization'));

        return $next($request);
    }
}
