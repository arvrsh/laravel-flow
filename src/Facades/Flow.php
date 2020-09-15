<?php

namespace Arvrsh\LaravelFlow\Facades;

use Illuminate\Support\Facades\Facade;

class Flow extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Arvrsh\LaravelFlow\Flow::class;
    }
}
