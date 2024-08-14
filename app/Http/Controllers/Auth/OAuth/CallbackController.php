<?php

namespace App\Http\Controllers\Auth\OAuth;

use App\Actions\Auth\CreateOauthUser;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class CallbackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : RedirectResponse
    {
        $socialiteUser = Socialite::driver('google')->user();
        $user = User::where('email', $socialiteUser->getEmail())->first();

        if (!$user && $request->session()->get('oauth_type') !== 'signup')
        {
            Session::forget('oauth_type');
            return to_route('login.view')->with('error', 'auth.oauth.failed');
        }

        if (!$user)
            $user = (new CreateOauthUser)->handle($socialiteUser);

        auth()->login($user);

        $request->session()->regenerate();

        return to_route('home');
    }
}
