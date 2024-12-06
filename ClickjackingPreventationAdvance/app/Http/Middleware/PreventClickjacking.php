<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventClickjacking
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Add the X-Frame-Options header
        $response->headers->set('X-Frame-Options', 'DENY');

        return $response;
    }
}
