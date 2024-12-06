<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class XFrameHeadersMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Generate nonce for inline scripts
        $nonce = base64_encode(random_bytes(16));

        // Define the Content Security Policy
        $csp = "default-src 'self'; ";
        $csp .= "script-src 'self' http://127.0.0.1:8000/ 'nonce-{$nonce}'; "; // Combined and nonce added
        $csp .= "style-src 'self' 'unsafe-inline' http://13.213.0.173; "; // Allow external stylesheet
        $csp .= "img-src 'self' data: http://13.213.0.173; "; // Allow images from specific source
        $csp .= "frame-ancestors 'none'; "; // Prevent clickjacking
        $csp .= "script-src 'self' 'nonce-xyz'; ";

        // Apply headers
        $response->headers->set('X-Frame-Options', 'DENY', true);
        $response->headers->set('Content-Security-Policy', $csp, true);
        $response->headers->set('X-XSS-Protection', '1; mode=block', true);
        $response->headers->set('X-Content-Type-Options', 'nosniff', true);
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains', true);
        $response->headers->set('Referrer-Policy', 'no-referrer', true);

        // Log applied headers
        Log::warning('Security headers applied', [
            'CSP' => $csp,
            'X-Frame-Options' => 'DENY',
            'X-XSS-Protection' => '1; mode=block',
        ]);

        return $response;
    }
}
