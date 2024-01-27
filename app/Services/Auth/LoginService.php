<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Enums\CodeType;
use App\Http\Requests\Auth\ConfirmIdentityRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Code;
use App\Models\User;
use App\Notifications\SendAuthCode;
use App\Traits\HasCodeGenerator;
use App\Traits\HasProviderAuth;
use Laravel\Socialite\Contracts\User as SocialiteUser;

class LoginService
{

    use HasProviderAuth, HasCodeGenerator;

    /*
     * Try login user or create new account if user do not exist
     */
    public function authenticateWithProvider(
        SocialiteUser $socialiteUser,
        string $provider
    ) : User
    {
        $user = $this->getExistingUser($socialiteUser);
        if (!$user)
            $user = $this->createUserFromProvider($socialiteUser, $provider);

        auth()->login($user);

        return $user;
    }

    public function sendAuthCode(LoginRequest $request) : void
    {
        $user = $this->getUser($request);
        $code = $this->createCodeFor($user, $request->ip(), CodeType::AUTH);
        $user->notify(new SendAuthCode($code));
    }

    public function authUserWithCode(ConfirmIdentityRequest $request) : void
    {
        $code = Code::where("value", $request->getCode())->first();
        auth()->attempt($code->user);
        $code->delete();
    }

    protected function getUser(LoginRequest $request) : User
    {
        return User::where("email", $request->email)->first();
    }

}
