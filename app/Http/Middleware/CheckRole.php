<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;

class CheckRole
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
        try {
            if ($request->user()->username != null) {
                if ($request->user()->username == 'administrator' || $request->user()->username == 'advisor') {
                    return $next($request);
                } else {
                    return redirect()->route('portal');
                }
            } else {
                return redirect()->route('portal');
            }
        } catch (Exception $error) {
            return redirect()->route('portal')->with('flashdata', 'Silahkan login terlebih dahulu!');
        }
    }
}
