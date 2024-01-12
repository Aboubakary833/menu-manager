<?php

namespace App\Enums;

use App\Traits\HasEnumUtils;

enum CodeType: int implements EnumContract
{

    use HasEnumUtils;

    case AUTH = 0;

    case VERIFICATION = 1;

}
