<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        "name",
        "dial_code",
        "iso2_code",
        "currency",
        "flag"
    ];

    public function cities() : HasMany
    {
        return $this->hasMany(City::class);
    }

}
