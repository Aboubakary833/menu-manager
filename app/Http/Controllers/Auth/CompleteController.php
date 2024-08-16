<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\CompleteRegistration;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CompleteRequest;
use Illuminate\Http\RedirectResponse;

class CompleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CompleteRequest $request) : RedirectResponse
    {
        (new CompleteRegistration)->handle($request);

        return to_route('home');
    }
}
