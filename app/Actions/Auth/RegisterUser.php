<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Enums\RoleEnum;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Role;
use App\Models\User;

final class RegisterUser
{
    public function handle(RegisterRequest $request) : User
	{
		$user = User::create(
			$request->validated()
		);
		
		$user->assignRole(
			Role::findByName((string)RoleEnum::getValue('ADMIN'))
		);

		createSetting('locale', config('app.locale'), $user);

		return $user;

	}
}
