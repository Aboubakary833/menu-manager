<?php

namespace App\Traits;

use App\Enums\CodeType;
use App\Models\Code;
use App\Models\User;
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

    public function createCodeFor(
        User $user,
        string $ipAddress,
        CodeType $type
    ) : Code | null {
        $value = $this->generateUniqueCode();
        $code = (new Code())->fill([
            "type" => (string) $type->value,
            "value" => $value,
            "ip_address" => $ipAddress
        ]);

        $code->user_id = $user->id;
        if (!$code->save())
            return null;
        return $code;
    }

    public function generateUniqueCode(int $length = 5) : string
    {
        $value = $this->generateCode($length);
        while ($this->checkCodeIfExists($value))
            $value = $this->generateCode();
        return $value;
    }

    protected function checkCodeIfExists(string $code) : bool
    {
        return Code::where("value", $code)->first() !== null;
    }

}
