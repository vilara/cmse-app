<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
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
        if (session()->has('LoggedUser') && (url('register') == $request->url() || url('login') == $request->url() || url('/') == $request->url())  ) {

            return redirect('/principal');
        }
        return $next($request);
    }
}
