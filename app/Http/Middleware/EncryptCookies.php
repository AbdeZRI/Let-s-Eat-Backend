<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * Elenco dei nomi dei cookie che non devono essere crittografati.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
