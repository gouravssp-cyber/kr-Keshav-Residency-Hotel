<?php
// app/Models/Room.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'room_type_id', 'room_number', 'floor', 'notes', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }
}