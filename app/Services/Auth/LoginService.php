<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Traits\HasProviderAuth;
use Laravel\Socialite\Contracts\User as SocialiteUser;

class LoginService
{

    use HasProviderAuth;

    /*
     * Try login user or create new account if user do not exist
     */
    public function authenticateWithProvider(
        SocialiteUser $socialiteUser,
        string $provider
    ) : User
    {
        $user = $this->getExistingUser($socialiteUser);
        if (!$user)
        {
            $user = User::create([
                "email" => $socialiteUser->getEmail(),
                "avatar" => $socialiteUser->getAvatar(),
                "created_from" => $provider,
                "email_verified_at" => "google" === $provider ? now() : null,
            ]);
        }

        auth()->login($user);

        return $user;
    }

    public function sendAuthCode(LoginRequest $request) : void
    {

    }
}
