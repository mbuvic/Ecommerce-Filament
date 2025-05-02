<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $guarded = [];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }


    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)
            ->withTimestamps();
    }
}
