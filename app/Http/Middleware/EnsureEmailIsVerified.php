<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified as EmailVerificationMiddleware;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class EnsureEmailIsVerified extends EmailVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param null $redirectToRoute
     */
    public function handle($request, Closure $next, $redirectToRoute = null): Response
    {
        $user = $request->user();
        if ($user &&
            ($user instanceof MustVerifyEmail &&
                !$user->hasVerifiedEmail())) {
            return $request->expectsJson()
                ? abort(403, __("auth.verify"))
                : Redirect::guest(URL::route($redirectToRoute ?: 'verification.notice'));
        }

        return $next($request);
    }
}
