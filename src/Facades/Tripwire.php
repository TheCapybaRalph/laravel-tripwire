<?php

namespace TheCapybaRalph\LaravelTripwire\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool run() - Run integrity check
 * @see \TheCapybaRalph\LaravelTripwire\Tripwire
 */
class Tripwire extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \TheCapybaRalph\LaravelTripwire\Tripwire::class;
    }
}
