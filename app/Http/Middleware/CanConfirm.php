<?php

namespace App\Http\Middleware;

use App\Models\Code;
use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanConfirm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $response = $next($request);
        $cookie = Cookie::get("menu_manager__0x46i52s54");
        $query = Code::query();

        if (!$cookie && !$query->where("token", $cookie)->first())
            abort(403);

        return $response;
    }
}
