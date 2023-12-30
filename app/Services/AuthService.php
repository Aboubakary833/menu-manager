<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Laravel\Socialite\Facades\Socialite;
use function auth;
use function now;

class AuthService
{
    public function validateProvider(string $provider) : void
    {
        if (!in_array($provider, ["google", "facebook"]))
        {
            abort(
                400,
                __("auth.socialite.incorrect_provider_name")
            );
        }
    }

    public function getUserFromProvider(string $provider) : SocialiteUser
    {
        return Socialite::driver($provider)->user();
    }

    public function authenticateOrCreate(
        SocialiteUser $providerUser,
        string $provider
    ) : User
    {
        $user = User::updateOrCreate([
            "email" => $providerUser->getEmail(),
            "avatar" => $providerUser->getAvatar(),
        ], [
            "created_from" => $provider,
            "email_verified_at" => $provider === "google" ? now() : null
        ]);

        auth()->login($user);

        return $user;
    }
}
