<?php
// database/migrations/2024_01_01_000007_create_room_pricing_plans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('room_pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_type_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('plan_name');           // "Very Good Breakfast ₹400"
            $table->enum('meal_plan', [
                'none',
                'breakfast',
                'breakfast_dinner',
                'all_inclusive',
            ])->default('none');

            $table->boolean('breakfast_included')->default(false);
            $table->boolean('dinner_included')->default(false);
            $table->unsignedTinyInteger('max_guests')->default(2);

            $table->decimal('base_price', 10, 2);       // Original / struck-through
            $table->decimal('discounted_price', 10, 2); // Actual selling price
            $table->unsignedTinyInteger('discount_percent')->nullable(); // 55
            $table->decimal('taxes_amount', 10, 2)->default(0);

            $table->boolean('includes_parking')->default(false);
            $table->boolean('includes_internet')->default(false);

            $table->enum('refund_policy', [
                'non_refundable',
                'partial',
                'full',
            ])->default('partial');

            $table->enum('payment_type', [
                'pay_online',
                'pay_at_property',
                'both',
            ])->default('pay_online');

            $table->boolean('genius_eligible')->default(false);
            $table->unsignedTinyInteger('nights')->default(1); // "per 2 nights"

            $table->boolean('is_active')->default(true);
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();

            $table->index(['room_type_id', 'is_active', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_pricing_plans');
    }
};