<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indica se il middleware CSRF deve essere abilitato per la richiesta.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldNotVerify($request)
    {
        // Aggiungi qui le rotte che non richiedono la verifica CSRF
        return false;
    }
}

