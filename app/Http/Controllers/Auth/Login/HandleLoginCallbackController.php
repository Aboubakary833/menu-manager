<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use function to_route;

class HandleLoginCallbackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        Request $request,
        AuthService $service
        )
    {
        $provider = $request->query("provider");
        $service->validateProvider($provider);
        $user = $service->getUserFromProvider($provider);

        if (!$user->getEmail())
            return back()->with("alert", __("auth.socialite.email_not_found"));

        $service->authenticateOrCreate($user, $provider);

        return to_route("dashboard");
    }
}
