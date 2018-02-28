<?php

namespace BaladevPro\PayPal\Facades;

/*
 * Class Facade
 * @package BaladevPro\PayPal\Facades
 * @see BaladevPro\PayPal\ExpressCheckout
 */

use Illuminate\Support\Facades\Facade;

class PayPal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BaladevPro\PayPal\PayPalFacadeAccessor';
    }
}
