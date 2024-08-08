<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\EnumContract;
use App\Traits\HasEnumUtils;

enum RoleEnum : string implements EnumContract
{

    use HasEnumUtils;

    case SUPER_ADMIN = 0;

    case ADMIN = 1;

    case CLIENT = 2;

}
