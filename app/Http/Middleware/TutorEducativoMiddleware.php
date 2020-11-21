<?php

namespace App\Http\Middleware;

use Closure;

class TutorEducativoMiddleware
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
        if (auth()->check() && (auth()->user()->type === 'tut_e' || auth()->user()->type === 'ad')) // Dejo que los admin entren tambien a todo lo que solo pueden acceder a los tutores educativos puesto que el admin puede acceder a donde quiera.
            return $next($request);
        return redirect('/');
    }
}
