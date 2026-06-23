<?php
// app/Models/RoomPricingPlan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomPricingPlan extends Model
{
    protected $fillable = [
        'room_type_id', 'plan_name', 'meal_plan',
        'breakfast_included', 'dinner_included', 'max_guests',
        'base_price', 'discounted_price', 'discount_percent', 'taxes_amount',
        'includes_parking', 'includes_internet',
        'refund_policy', 'payment_type', 'genius_eligible',
        'nights', 'is_active', 'sort_order',
    ];

    protected $casts = [
        'breakfast_included'  => 'boolean',
        'dinner_included'     => 'boolean',
        'includes_parking'    => 'boolean',
        'includes_internet'   => 'boolean',
        'genius_eligible'     => 'boolean',
        'is_active'           => 'boolean',
        'base_price'          => 'decimal:2',
        'discounted_price'    => 'decimal:2',
        'taxes_amount'        => 'decimal:2',
    ];

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    public function getTotalPriceAttribute(): float
    {
        return (float) $this->discounted_price + (float) $this->taxes_amount;
    }

    public function getMealPlanLabelAttribute(): string
    {
        return match($this->meal_plan) {
            'breakfast'         => 'Breakfast Included',
            'breakfast_dinner'  => 'Breakfast & Dinner Included',
            'all_inclusive'     => 'All Inclusive',
            default             => 'Room Only',
        };
    }
}