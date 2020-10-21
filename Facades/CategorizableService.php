<?php

namespace ArtisanCloud\LaravelCategorizable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CategorizableService
 * @package ArtisanCloud\LaravelCategorizable
 */
class CategorizableService extends Facade
{
    //
    protected static function getFacadeAccessor()
    {
        return CategorizableService::class;
    }
}
