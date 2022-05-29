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
        if ($request->user()->username == 'operator') {
            return $next($request);
        } else {
            return response()->json([
                'message' => 'Not Allowed!',
                'data' => 'Anda tidak memiliki hak akses untuk mengakses halaman ini',
            ]);
        }
    }
}
