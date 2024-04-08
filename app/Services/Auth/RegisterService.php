<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Traits\HasProviderAuth;

class RegisterService
{
    use HasProviderAuth;

    public function createAccountWithOnlyEmail(string $email) {

    }
}
