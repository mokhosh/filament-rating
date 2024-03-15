<?php

namespace Mokhosh\FilamentRating\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mokhosh\FilamentRating\FilamentRating
 */
class FilamentRating extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mokhosh\FilamentRating\FilamentRating::class;
    }
}
