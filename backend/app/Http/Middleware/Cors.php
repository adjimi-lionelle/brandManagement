<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Fruitcake\Cors\HandleCors;

class Cors extends HandleCors
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $this->addHeaders($request, $next($request));

        // Add any custom headers if needed
        $response->header('X-Custom-Header', 'Allowed');

        return $response;
    }
}
