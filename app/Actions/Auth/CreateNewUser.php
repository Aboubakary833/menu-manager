<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class CreateNewUser
{
    public function handle(Request $request) : void
	{
		$user = User::create($request->validated());
		auth()->login($user);

		event(new Registered($user));
	}
}
