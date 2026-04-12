<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrustProxies
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // kalau datang dari reverse proxy / docker / nginx
        if ($request->headers->has('X-Forwarded-Proto')) {
            $isHttps = $request->header('X-Forwarded-Proto') === 'https';

            // ini "trik resmi" agar Laravel anggap request = HTTPS
            $request->server->set('HTTPS', $isHttps);
            $request->server->set('REQUEST_SCHEME', $isHttps ? 'https' : 'http');
            $request->server->set('SERVER_PORT', $isHttps ? 443 : 80);
        }

        return $next($request);
    }
}
