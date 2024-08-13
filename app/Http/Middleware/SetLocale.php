<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Cookie::get('__locale'))
            app()->setLocale(Cookie::get('__locale'));

        else if (
            !$request->getPreferredLanguage() ||
            !Str::startsWith($request->getPreferredLanguage(), 'fr')
            )
        {
            app()->setLocale('en');
        }
        else
            app()->setLocale('fr');

        $request->setLocale(config('app.locale'));
        
        return $next($request);
    }
}
