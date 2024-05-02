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
use Nette\Utils\Random;

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

    /**
     * @param LoginRequest $request
     * @return string
     * The temporary token
     */
    public function sendAuthCode(LoginRequest $request) : string
    {
        $user = $this->getUser($request);
        $token = Random::generate();
        $code = $this->createCodeFor($user, $token, CodeType::AUTH);
        $user->notify(new SendAuthCode($code));

        return $token;
    }

    public function authUserWithCode(ConfirmIdentityRequest $request) : void
    {
        $code = Code::where("value", $request->getCode())->first();
        auth()->login($code->user);
        $code->delete();
    }

    protected function getUser(LoginRequest $request) : User
    {
        return User::where("email", $request->email)->first();
    }

}
