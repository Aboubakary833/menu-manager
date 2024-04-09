<?php

namespace App\Enums;

use App\Traits\HasEnumUtils;

enum Lang : string implements EnumContract
{
    use HasEnumUtils;

    case EN = "English";
    case FR = "Français";
}
