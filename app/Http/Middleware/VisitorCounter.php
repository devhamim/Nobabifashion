<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;
use Log;

class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $ip = $this->getIpAddress($request);
        $location = Location::get($ip);

        // Log the raw location data for debugging
        Log::info('Visitor IP: ' . $ip);
        Log::info('Raw Location Data: ', (array)$location);

        // Use fallback values if location data is not available
        $country = $location ? ($location->countryCode ?? 'Unknown') : 'Unknown';
        $city = $location ? ($location->cityName ?? 'Unknown') : 'Unknown';

        Visitor::create([
            'ip' => $ip,
            'country' => $country,
            'city' => $city,
        ]);

        return $next($request);

    }

    /**
     * Get the client's IP address.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function getIpAddress(Request $request): string
    {
        $ip = $request->ip();

        if ($request->hasHeader('X-Forwarded-For')) {
            $ip = $request->header('X-Forwarded-For');
        } elseif ($request->hasHeader('CF-Connecting-IP')) {
            $ip = $request->header('CF-Connecting-IP');
        }

        // Handle multiple IPs from the 'X-Forwarded-For' header
        if (strpos($ip, ',') !== false) {
            $ip = trim(explode(',', $ip)[0]);
        }

        return $ip;
    }
}
