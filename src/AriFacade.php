<?php

namespace Soap\Ari;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\Ari\Ari
 */
class AriFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-ari';
    }
}
