<?php

namespace App\Http\Middleware;

use Closure;

class AuthJWT
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
        //die(auth()->user());
        if(auth()->check()) {
            return $next($request);
        } else {
            return response()->json(['message' => 'You should login first']);
        }
        return $next($request);
    }
}
