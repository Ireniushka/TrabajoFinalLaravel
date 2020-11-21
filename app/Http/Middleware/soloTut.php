<?php

namespace App\Http\Middleware;

use Closure;

class soloAlum
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
        switch(auth::user()->type){
            case('al'):
                return redirect('homeAlum');
            break;
            case('tut_c'):
                return $next($request);
            break;
            case('tut_e'):
                return $next($request);
            break;
            case('ad'):
                return redirect('homeAdmin');
            break;
        }
    }
}