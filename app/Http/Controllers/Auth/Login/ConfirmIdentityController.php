<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ConfirmIdentityRequest;
use App\Services\Auth\LoginService;

class ConfirmIdentityController extends Controller
{

    public function __construct(public LoginService $service) {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(ConfirmIdentityRequest $request)
    {
        $this->service->authUserWithCode($request);
        return to_route("dashboard");
    }
}
