<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LogByProviderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        Request $request,
        AuthService $service
        ) : RedirectResponse
    {
        $provider = $request->query("provider");
        $service->validateProvider($provider);

        return Socialite::driver($provider)->redirect();
    }
}
