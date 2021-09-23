<?php

namespace DevGourab\SamlIdp\Traits;

trait EventMap
{
    /**
     * All of the Laravel SAML IdP event / listener mappings.
     *
     * @var array
     */
    protected $default_events = [
        'DevGourab\SamlIdp\Events\Assertion' => [],
        'Illuminate\Auth\Events\Logout' => [
            'DevGourab\SamlIdp\Listeners\SamlLogout',
        ],
        'Illuminate\Auth\Events\Authenticated' => [
            'DevGourab\SamlIdp\Listeners\SamlAuthenticated',
        ],
        'Illuminate\Auth\Events\Login' => [
            'DevGourab\SamlIdp\Listeners\SamlLogin',
        ],
    ];
}
