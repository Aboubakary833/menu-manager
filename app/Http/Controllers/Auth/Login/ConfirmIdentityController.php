<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ConfirmIdentityRequest;

class ConfirmIdentityController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ConfirmIdentityRequest $request)
    {
        dd(
            array_values($request->validated())
        );
    }
}
