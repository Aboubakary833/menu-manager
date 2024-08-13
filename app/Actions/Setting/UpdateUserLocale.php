<?php

declare(strict_types=1);

namespace App\Actions\Setting;

use App\Models\User;

class UpdateUserLocale
{
    public function handle(User $user, string $newLocale) : void
	{
		$locale = $user->settings->where('key', 'locale')->first();
		if ($locale)
			$locale->update(['value' => $newLocale]);
	}
}
