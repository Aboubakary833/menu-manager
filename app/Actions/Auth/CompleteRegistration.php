<?php

declare(strict_types=1);

namespace App\Actions\Auth;
use App\Http\Requests\Auth\CompleteRequest;
use App\Models\Company;
use App\Models\Role;

class CompleteRegistration
{
    public function handle(CompleteRequest $request) : void
	{
		/**
		 * @var \App\Models\User
		 */
		$user = $request->user();

		if ($request->input('password'))
			$user->update($request->only('password'));

		if ((int)$request->input('type'))
		{
			$user->assignRole(Role::findByName('client'));
			return;
		}

		$user->assignRole(Role::findByName('admin'));
		$company = Company::create(['name' => $request->only('enterprise')]);
		$user->company_id = $company->id;

		$user->save();
	}
}
