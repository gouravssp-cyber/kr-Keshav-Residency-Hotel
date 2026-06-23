<?php
// app/Models/RoomTypeImage.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class RoomTypeImage extends Model
{
    protected $fillable = [
        'room_type_id', 'image_path', 'alt_text', 'sort_order', 'is_cover',
    ];

    protected $casts = ['is_cover' => 'boolean'];

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    public function getUrlAttribute(): string
    {
        return Storage::url($this->image_path);
    }
}