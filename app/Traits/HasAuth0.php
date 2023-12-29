<?php

namespace App\Traits;

use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

trait HasAuth0
{
    public function validateProvider(string $provider) : bool
    {
        return in_array($provider, ["google", "facebook"]);
    }

    public function getUserFromProvider(string $provider) : User
    {
        return Socialite::driver($provider)->user();
    }
}
