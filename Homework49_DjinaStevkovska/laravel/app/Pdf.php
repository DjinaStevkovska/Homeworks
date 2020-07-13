<?php

namespace App;
use Illuminate\Support\Facades\Facade;

class PDF extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "pdf-service";
    }
};
