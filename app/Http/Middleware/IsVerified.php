<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class IsVerified extends EnsureEmailIsVerified
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
                ? abort(403, __("auth.should_verify"))
                : Redirect::guest(URL::route($redirectToRoute ?: 'verification.notice'));
        }

        return $next($request);
    }
}
