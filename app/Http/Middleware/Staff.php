<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Staff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        }
        if (Auth::user()->role == 2) {
            return redirect()->route('admin');
        }
        if (Auth::user()->role == 3) {
            return redirect()->route('manager');
        }
        if (Auth::user()->role == 4) {
            return $next($request);
        }
    }
}
