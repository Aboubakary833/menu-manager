<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Services\Auth\LoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HandleLoginCallbackController extends Controller
{
    public function __construct(public LoginService $service) {}
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        Request $request
        ) : RedirectResponse
    {
        $provider = $request->query("provider");
        $this->service->validateProvider($provider);
        $user = $this->service->getUserFromProvider($provider);

        if (!$user->getEmail())
            return back()->with("alert", __("auth.socialite.email_not_found"));

        $this->service->authenticateWithProvider($user, $provider);

        return to_route("dashboard");
    }
}
