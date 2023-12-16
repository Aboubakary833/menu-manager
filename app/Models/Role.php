<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRoleModel;

class Role extends SpatieRoleModel
{
    use HasFactory, HasUlids;
}
