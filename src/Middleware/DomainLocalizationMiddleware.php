<?php

namespace BastienDonjon\DomainLocalization\Middleware;

use BastienDonjon\DomainLocalization\DomainLocalization;
use Closure;

/**
 * Class DomainLocalizationMiddleware
 * @package BastienDonjon\DomainLocalization\Middleware
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
        new DomainLocalization($request, config('domainlocalization'));

        return $next($request);
    }
}
