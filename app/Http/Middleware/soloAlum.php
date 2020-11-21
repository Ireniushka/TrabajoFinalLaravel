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
                return $next($request);
            break;
            case('tut_c'):
                return redirect('homeTut');
            break;
            case('tut_e'):
                return redirect('hometut');
            break;
            case('ad'):
                return redirect('homeAdmin');
            break;
        }
    }
}