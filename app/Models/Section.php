<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        "company_id",
        "country_code",
        "city",
        "phone",
        "address",
        "latitude",
        "longitude",
        "is_headquarter"
    ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
