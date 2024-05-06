<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\RegisterService;

class RegisterByEmailController extends Controller
{
    public function __construct(
        public RegisterService $service
    ) {}
    public function __invoke(RegisterRequest $request)
    {

    }
}
