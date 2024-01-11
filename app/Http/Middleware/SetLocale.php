<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use function dd;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->getPreferredLanguage())
            app()->setLocale("en");

        if (!Str::startsWith($request->getPreferredLanguage(), "fr"))
            app()->setLocale("en");
        else
            app()->setLocale("fr");

        $request->setLocale(config("app.locale"));
        return $next($request);
    }
}
