<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as SpatiePermissionModel;

class Permission extends SpatiePermissionModel
{
    use HasFactory, HasUlids;
}
