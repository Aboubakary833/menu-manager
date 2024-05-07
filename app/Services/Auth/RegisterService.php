<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Enums\SettingEnum;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Traits\HasProviderAuth;
use Illuminate\Auth\Events\Registered;

class RegisterService
{
    use HasProviderAuth;

    public function createAccountWithOnlyEmail(RegisterRequest $request) : void
    {
        $user = User::create(["email" => $request->input("email")]);
        createSetting("locale", $request->getLocale(), $user);
        event(new Registered($user));
        auth()->login($user);
    }
}
