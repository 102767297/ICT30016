<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log; // Import Log Facade

class XFrameHeadersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Define the Content Security Policy
        $csp = "default-src 'self'; ";
        $csp .= "script-src 'self' http://127.0.0.1:8000/; "; // Adjust domains as needed
        $csp .= "style-src 'self' 'unsafe-inline'; "; // Allows inline styles but only from the same origin
        $csp .= "img-src 'self' data:; "; // Allows images from the same origin and data URIs
        $csp .= "frame-ancestors 'none'; "; // Prevents clickjacking by disallowing embedding in iframes

        // Apply security headers
        $response->headers->set('Content-Security-Policy', $csp, true);
        $response->headers->set('X-Frame-Options', 'DENY', true); // Prevent iframe embedding
        $response->headers->set('X-XSS-Protection', '1; mode=block', true); // Block reflected XSS attacks
        $response->headers->set('X-Content-Type-Options', 'nosniff', true); // Prevent MIME-type sniffing
        $response->headers->set('Referrer-Policy', 'no-referrer', true); // Control referrer information sent

        // Optional headers for enhanced security
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains', true); // Enforce HTTPS
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()', true); // Restrict browser features

        // Log the headers to monitor if necessary
        Log::info('Security headers applied', [
            'CSP' => $csp,
            'X-Frame-Options' => 'DENY',
            'X-XSS-Protection' => '1; mode=block',
        ]);

        return $response;
    }
}
