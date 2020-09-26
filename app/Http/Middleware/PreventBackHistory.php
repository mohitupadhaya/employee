<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response= $next($request);
        return $response->header('Cache-Control','nocache,no-store,max-age=0,must-revalidates')->header('pragma','no-cache')->header('Expires','Sun,02,jan 1990 00:00:00 GMT');


    }
}
