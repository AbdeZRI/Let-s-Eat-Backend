<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * Elenco dei campi della richiesta che devono essere trimmati.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
