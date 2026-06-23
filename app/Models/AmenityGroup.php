<?php
// app/Models/AmenityGroup.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AmenityGroup extends Model
{
    protected $fillable = ['name', 'icon', 'sort_order'];

    public function amenities(): HasMany
    {
        return $this->hasMany(Amenity::class)->orderBy('sort_order');
    }
}