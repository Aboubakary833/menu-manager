<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = ["name", "email", "website"];

    public function type() : BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
