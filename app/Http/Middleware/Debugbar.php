<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Debugbar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Debugbar should be enable in ENV file before its enabled for security reasons, 
        // even if you give him admin_debugbar permission it wont show unless you enable it in env file. 
        // DEBUGBAR_ENABLED=true
        // DEBUGBAR_OPEN_STORAGE=true
        
        if (auth()->check() && auth()->user()->cannot('admin_debugbar')) {
            \Debugbar::disable();
        }

        return $next($request);
    }
}
