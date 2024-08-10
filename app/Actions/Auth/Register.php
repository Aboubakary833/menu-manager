<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

final class Register
{
	public function handle(RegisterRequest $request) : void
	{
		$user = User::create(
			$request->validated()
		);

		event(new Registered($user));
	}
}
