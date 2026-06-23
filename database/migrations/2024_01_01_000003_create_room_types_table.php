<?php
// database/migrations/2024_01_01_000003_create_room_types_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');                        // "Twin Room"
            $table->string('slug')->unique();              // "twin-room"
            $table->text('short_description')->nullable(); // Tagline/quote
            $table->longText('description')->nullable();   // Full description
            $table->decimal('size_sqm', 5, 2)->default(0);// 28.00
            $table->unsignedTinyInteger('max_guests')->default(2);
            $table->string('bed_type')->nullable();        // "2 Single Beds"
            $table->unsignedTinyInteger('bed_count')->default(1);
            $table->string('floor_type')->nullable();      // "Tile/Marble Floor"
            $table->boolean('smoking_allowed')->default(false);
            $table->boolean('is_wheelchair_accessible')->default(false);
            $table->time('checkin_time')->default('12:00:00');
            $table->time('checkout_time')->default('11:00:00');
            $table->boolean('pets_allowed')->default(false);
            $table->text('checkin_instructions')->nullable();
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_types');
    }
};