<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $url = $guard ? '/admin':'/home';
            return redirect($url);
        }
//        if (Auth::guard($guard)->check()) {
//            $url = '/home';
//            return redirect($url);
//        }
//
//        if (Auth::guard('admin')->check()) {
//            $url = '/admin';
//            return redirect($url);
//        }

        return $next($request);
    }
}
