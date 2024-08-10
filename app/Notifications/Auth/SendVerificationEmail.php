<?php

namespace App\Notifications\Auth;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;

class SendVerificationEmail extends VerifyEmail
{
    use Queueable;

    public function __construct()
    {
        $this->onQueue('emails');
    }
}
