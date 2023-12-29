<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Services\Auth\LoginService;
use Illuminate\Http\Request;

class HandleLoginCallbackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        Request $request,
        LoginService $service
        )
    {
        $provider = $request->query("provider");
        if (!$service->validateProvider($provider))
            abort(400);
        $user = $service->getUserFromProvider($provider);
        dd($user);
    }
}
