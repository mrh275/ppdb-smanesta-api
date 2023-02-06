<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Operator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->username != null) {
            if ($request->user()->username == 'operator') {
                return $next($request);
            }
        } else {
            session()->put('login_session', false);
            return route('portal');
        }
    }
}
