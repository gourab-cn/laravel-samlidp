<?php

namespace DevGourab\SamlIdp\Listeners;

use DevGourab\SamlIdp\Jobs\SamlSso;
use Illuminate\Auth\Events\Login;

class SamlLogin
{
    /**
     * Listen for the Authenticated event
     *
     * @param  Authenticated $event [description]
     * @return [type]               [description]
     */
    public function handle(Login $event)
    {
        if (in_array($event->guard, config('samlidp.guards')) && request()->filled('SAMLRequest') && ! request()->is('saml/logout')) {
            abort(response(SamlSso::dispatchNow()), 302);
        }
    }
}
