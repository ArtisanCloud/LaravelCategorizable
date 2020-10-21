<?php

namespace ArtisanCloud\Categorizable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CategorizableService
 * @package ArtisanCloud\Categorizable
 */
class CategorizableService extends Facade
{
    //
    protected static function getFacadeAccessor()
    {
        return CategorizableService::class;
    }
}
