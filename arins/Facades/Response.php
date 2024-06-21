<?php

namespace Arins\Facades;

use Illuminate\Support\Facades\Facade;

class Response extends Facade
{

/**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'response'; }

}