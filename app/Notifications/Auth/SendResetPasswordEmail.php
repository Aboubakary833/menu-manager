<?php

namespace App\Notifications\Auth;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendResetPasswordEmail extends ResetPassword implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        $this->onQueue('emails');
    }
}
