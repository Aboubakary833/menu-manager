<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\ResetPassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\NewPasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;

class NewPasswordController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(NewPasswordRequest $request) : RedirectResponse
    {
        $status = (new ResetPassword)->handle($request);

        return $status === Password::PASSWORD_RESET ?
            to_route('login.view')->with('success', $status) :
            back()->with('error', $status);
    }
}
