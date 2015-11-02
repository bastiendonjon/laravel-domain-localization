<?php

namespace BastienDonjon\DomainLocalization\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class DomainLocalizationMiddleware
{
    private $request;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->request = $request;
        $tld = $this->getTld();

        $allowLocalByTld = [
            '.fr' => 'fr',
            '.com' => 'en'
        ];

        if (array_key_exists($tld, $allowLocalByTld)) {
            App::setLocale($allowLocalByTld[$tld]);
        }

        return $next($request);
    }

    /**
     * Get top level domain.
     *
     * @return string
     */
    private function getTld()
    {
        return substr(strrchr($this->request->getHttpHost(), '.'), 0);
    }
}
