<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CheckBanStatus
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
        $ip = $request->ip();
        $key = 'contact-attempts-' . $ip;
        $attempts = Cache::increment($key, 1, 60);

        if ($attempts > 10) {
            Cache::put('ban-status-' . $ip, true, 180);
            return response()->json(['message' => 'You are temporarily banned. Try again later.'], 429);
        }

        return $next($request);
    }
}
