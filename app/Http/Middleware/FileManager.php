<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FileManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $configElfidnerUrl = ltrim(config('elfinder.route.prefix'), '/');

        if (
            auth()->check() && 
            $request->is($configElfidnerUrl) && 
            auth()->user()->cannot('admin.file_manager')
        ) {
            abort(403);
        }

        return $next($request);
    }
}
