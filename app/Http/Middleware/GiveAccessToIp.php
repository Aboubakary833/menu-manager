<?php

namespace App\Http\Middleware;

use App\Models\Code;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GiveAccessToIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $code = Code::where("ip_address", $request->ip())->first();
        if (!$code)
            abort(403);
        return $next($request);
    }
}
