<?php

namespace Scottybo\BufferApp\Facades;

use Illuminate\Support\Facades\Facade;

class BufferAppFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Scottybo\LaravelBufferApp\BufferApp';
    }
}