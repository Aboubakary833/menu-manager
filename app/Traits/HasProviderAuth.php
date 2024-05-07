<?php

namespace App\Traits;

use App\Models\User;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Laravel\Socialite\Facades\Socialite;

trait HasProviderAuth
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

    public function getExistingUser(SocialiteUser $socialiteUser) : User | null
    {
        return User::where("email", $socialiteUser->getEmail())->first();
    }

    public function getUserFromProvider(string $provider) : SocialiteUser
    {
        return Socialite::driver($provider)->user();
    }

    public function createUserFromProvider(
        SocialiteUser $user,
        string $provider
    ) : User
    {
        return User::create([
            "email" => $user->getEmail(),
            "avatar" => $user->getAvatar(),
            "created_from" => $provider,
            "email_verified_at" => $user->getEmail() ? now() : null,
        ]);
    }
}
