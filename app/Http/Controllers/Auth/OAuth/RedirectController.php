<?php

namespace App\Http\Controllers\Auth\OAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class RedirectController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : RedirectResponse
    {
        if (!in_array($request->query('type'), ['login', 'signup']))
            return back()->with('error', __('auth.oauth.type_error'));
        
        $request->session()->put('oauth_type', $request->query('type'));
        
        return Socialite::driver('google')->redirect();
    }
}
