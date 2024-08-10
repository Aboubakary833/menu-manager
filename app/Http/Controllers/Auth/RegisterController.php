<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\Register;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request)
    {
        (new Register)->handle($request);

        return to_route('verification.notice');
    }
}
