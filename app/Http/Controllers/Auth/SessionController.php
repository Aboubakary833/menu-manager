<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function login(LoginRequest $request) : RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return to_route('home');
    }

    public function logout(Request $request) : RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login.view');
    }
}
