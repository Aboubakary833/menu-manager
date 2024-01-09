<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory, HasUlids;

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function place() : BelongsTo
    {
        return $this->belongsTo(Place::class);
    }

    public function items() : BelongsToMany
    {
        return $this->belongsToMany(Item::class);
    }
}
