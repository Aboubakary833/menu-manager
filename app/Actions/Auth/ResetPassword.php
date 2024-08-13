<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Http\Requests\Auth\NewPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

final class ResetPassword
{
    public function handle(NewPasswordRequest $request) : mixed
	{
		return Password::reset(
			$request->only('email', 'password', 'password_confirmation', 'token'),
			function(User $user, string $password) {
				$user->forceFill([
					'password' => Hash::make($password)
				])->setRememberToken(Str::random(60));
	 
				$user->save();
			}
		);
	}
}
