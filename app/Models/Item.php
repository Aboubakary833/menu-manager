<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = ["name", "price", "picture"];

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function menus() : BelongsToMany
    {
        return $this->belongsToMany(Menu::class);
    }
}
