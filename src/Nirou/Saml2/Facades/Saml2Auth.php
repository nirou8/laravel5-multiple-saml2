<?php
namespace Nirou\Saml2\Facades;

use Illuminate\Support\Facades\Facade;

class Saml2Auth extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Nirou\Saml2\Saml2Auth';
    }

} 