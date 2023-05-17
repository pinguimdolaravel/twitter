<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIpMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && session('ip') !== $request->ip()) {
            auth()->logout();
            session()->invalidate();

            return redirect()->route('login');
        }

        return $next($request);
    }
}
