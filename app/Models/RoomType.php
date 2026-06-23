<?php
// app/Models/RoomType.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class RoomType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'short_description', 'description',
        'size_sqm', 'max_guests', 'bed_type', 'bed_count',
        'floor_type', 'smoking_allowed', 'is_wheelchair_accessible',
        'checkin_time', 'checkout_time', 'pets_allowed',
        'checkin_instructions', 'sort_order', 'is_active',
    ];

    protected $casts = [
        'size_sqm'               => 'decimal:2',
        'smoking_allowed'        => 'boolean',
        'is_wheelchair_accessible' => 'boolean',
        'pets_allowed'           => 'boolean',
        'is_active'              => 'boolean',
    ];

    // Auto-generate slug from name
    protected static function booted(): void
    {
        static::creating(function (self $model) {
            $model->slug ??= Str::slug($model->name);
        });
    }

    // ─── Relationships ──────────────────────────────────────────

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_type_amenities');
    }

    public function amenitiesByGroup(): HasMany
    {
        // Eager-load amenities grouped by their group
        return $this->hasMany(RoomTypeAmenity::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(RoomTypeImage::class)->orderBy('sort_order');
    }

    public function coverImage(): HasMany
    {
        return $this->hasMany(RoomTypeImage::class)->where('is_cover', true)->limit(1);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function pricingPlans(): HasMany
    {
        return $this->hasMany(RoomPricingPlan::class)
                    ->where('is_active', true)
                    ->orderBy('sort_order');
    }

    // ─── Helpers ────────────────────────────────────────────────

    public function getAmenitiesGroupedAttribute(): \Illuminate\Support\Collection
    {
        return $this->amenities()
            ->with('group')
            ->get()
            ->groupBy(fn($a) => $a->group->name);
    }

    public function getLowestPriceAttribute(): ?float
    {
        return $this->pricingPlans()->min('discounted_price');
    }

    public function getAvailableRoomsCountAttribute(): int
    {
        return $this->rooms()->where('is_active', true)->count();
    }
}