<?php

namespace Astatroth\LaravelTimer;

use Illuminate\Support\Facades\Facade;

class Timer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'timer';
    }
}