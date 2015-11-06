<?php

namespace BastienDonjon\DomainLocalization;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * Class DomainLocalization
 * @package BastienDonjon\DomainLocalization
 */
class DomainLocalization
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @var Array
     */
    private $config;

    /**
     * @param Request $request
     * @param array $config
     */
    public function __construct(Request $request, Array $config)
    {
        $this->request = $request;
        $this->config = $config;
        $this->defineLocale();
    }

    /**
     *
     */
    private function defineLocale()
    {
        $tld = $this->getTld();
        if (array_key_exists($tld, $this->config['localesByTld'])) {
            App::setLocale($this->config['localesByTld'][$tld]);
        }
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