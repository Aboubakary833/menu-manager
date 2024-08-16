<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request) : RedirectResponse
    {
        (new CreateNewUser)->handle($request);

        return to_route('verification.notice');
    }
}
