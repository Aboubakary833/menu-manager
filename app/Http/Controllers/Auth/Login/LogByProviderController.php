<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Services\Auth\LoginService;
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
        LoginService $service
        ) : RedirectResponse
    {
        $provider = $request->query("provider");

        if(!$service->validateProvider($provider))
            abort(400);
        return Socialite::driver($provider)->redirect();
    }
}
