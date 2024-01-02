<?php

namespace App\Traits;

use Nette\Utils\Random;

trait HasCodeGenerator
{

    /**
     * Generate a *0-9* code of a given length
     */
    public function generateCode(int $length = 5) : string
    {
        return Random::generate($length, "0-9");
    }

}
