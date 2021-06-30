<?php

namespace MohammadShariq\LaravelRemote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MohammadShariq\LaravelRemote\LaravelRemote
 */
class LaravelRemoteFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
