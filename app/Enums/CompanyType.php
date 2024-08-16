<?php

declare(strict_types=1);

namespace App\Enums;
use App\Contracts\EnumContract;
use App\Traits\HasEnumUtils;

enum CompanyType: int implements EnumContract
{
	use HasEnumUtils;

	case RESTAURANT = 0;

	case HOTEL = 1;
}
