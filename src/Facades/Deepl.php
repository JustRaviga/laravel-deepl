<?php

namespace JustRaviga\Deepl\Facades;

use Illuminate\Support\Facades\Facade;
use JustRaviga\Deepl\Clients\DeeplClient;

/**
 * @method DeeplClient api()
 */
class Deepl extends Facade
{
    /**
     * Return facade unique key
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'deepl';
    }
}
