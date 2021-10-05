<?php

namespace Eamirgh\LazyDog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eamirgh\LazyDog\LazyDog
 */
class LazyDogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lazy-dog';
    }
}
