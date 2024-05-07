<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Setting extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = ["key", "value", "user_id"];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
