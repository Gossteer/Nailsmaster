<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminForWeb
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
        //dd(Auth::user()->admin_id);
        if (!Auth::user()->admin_id) {
            Auth::logout();
            return redirect(RouteServiceProvider::HOME);
        };
        return $next($request);
    }
}
