<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\HasEnumUtils;

enum MenuType : int implements EnumContract {

	use HasEnumUtils;

	case GENERAL = 1 >> 1;

	case OFTHEDAY = 1 << 0;

	case PROMOTIONAL = 1 << 1;

}
