<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReSendVerificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : RedirectResponse
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with("message", __("auth.verificationSent"));
    }
}
