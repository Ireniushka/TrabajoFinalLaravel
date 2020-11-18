<?php

namespace App\Http\Middleware;

use Closure;

class AlumMiddleware
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
        if (auth()->check() && (auth()->user()->type === 'al' || auth()->user()->type === 'ad')) // Dejo que los admin entren tambien a todo lo que solo pueden acceder a los alumnos puesto que el admin puede acceder a donde quiera.
            return $next($request);
        return redirect('/');
    }
}
