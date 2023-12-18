<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\HasEnumUtils;

enum PlaceType : int implements EnumContract {

	use HasEnumUtils;

	case TABLE = 0;

	case ROOM = 1;

}
