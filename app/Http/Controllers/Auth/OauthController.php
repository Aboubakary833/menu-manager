<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $socialiteUser = Socialite::driver('google')->user();
        $user = User::where('email', $socialiteUser->getEmail())->first();
        if (!$user)
            return to_route('login.view')->with('error', 'auth.oauth_failed');

        auth()->login($user);

        $request->session()->regenerate();

        return to_route('home');
    }
}
