<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\EnumContract;
use App\Traits\HasEnumUtils;

enum RoleEnum : string implements EnumContract
{

    use HasEnumUtils;

    case SUPER_ADMIN = 'super_admin';

    case ADMIN = 'admin';

    case CLIENT = 'client';

}
