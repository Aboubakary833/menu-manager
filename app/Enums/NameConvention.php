<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\HasEnumUtils;

enum NameConvention implements EnumContract {

	use HasEnumUtils;

	case LOWER;
	
	case UPPER;

	case PASCAL;

}
