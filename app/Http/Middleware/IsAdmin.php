<?php

namespace App\Http\Middleware;

use App\Http\Middleware\Authenticate;
use Closure;

class IsAdmin extends Authenticate
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
        if(!auth()->user())
            return redirect('/login');
        if(auth()->user()->is_admin=='Y')
            return redirect('/admin');
        return $next($request);
    }
}
