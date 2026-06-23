<?php
// app/Models/Amenity.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenity extends Model
{
    protected $fillable = ['amenity_group_id', 'name', 'icon', 'sort_order'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(AmenityGroup::class, 'amenity_group_id');
    }

    public function roomTypes(): BelongsToMany
    {
        return $this->belongsToMany(RoomType::class, 'room_type_amenities');
    }
}