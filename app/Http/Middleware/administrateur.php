<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class administrateur
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
        if(Auth::user()){
            if (Auth::user()->admin){
                return $next($request);
            }
       }
        return abort(401);
}
}
