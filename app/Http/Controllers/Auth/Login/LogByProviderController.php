<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LogByProviderController extends Controller
{
    public function __construct(
        public AuthService $service
    ) {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(
        Request $request
        ) : RedirectResponse
    {
        $provider = $request->query("provider");
        $this->service->validateProvider($provider);

        return Socialite::driver($provider)->redirect();
    }
}
