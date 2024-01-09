<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = ["name"];

    public function companies() : HasMany
    {
        return $this->hasMany(Company::class);
    }
}
