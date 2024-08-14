<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Models\User;
use Laravel\Socialite\Contracts\User as SocialiteUser;

class CreateOauthUser
{
    public function handle(SocialiteUser $user) : User
	{
		$user = User::create([
			'name' => $user->getName(),
			'email' => $user->getEmail(),
			'created_from' => 'google',
		]);

		$user->markEmailAsVerified();

		return $user;
	}
}
