<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
                return $next($request);

        try {
            if (Auth::user()->tipo_usuario == 1)

            return redirect('/');
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }
}
