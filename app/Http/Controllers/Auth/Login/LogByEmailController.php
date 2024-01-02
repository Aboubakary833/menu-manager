<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;

class LogByEmailController extends Controller
{

    public function __construct(public LoginService $service) {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
//        $this->service-
    }
}
