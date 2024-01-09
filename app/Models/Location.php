<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = ["phone", "address", "longitude", "latitude", "is_headquarter"];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
