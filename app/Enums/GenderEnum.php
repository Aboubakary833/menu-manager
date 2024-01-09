<?php

namespace App\Enums;


use App\Traits\HasEnumUtils;

enum GenderEnum : int implements EnumContract
{
    use HasEnumUtils;

    case MAN = 1;

    case WOMAN = 2;

    case NONE = 3;
}
