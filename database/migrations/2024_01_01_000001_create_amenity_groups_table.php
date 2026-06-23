<?php
// database/migrations/2024_01_01_000001_create_amenity_groups_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('amenity_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');               // "Room Amenities", "Private Bathroom", "View", "Facilities"
            $table->string('icon')->nullable();   // FA icon
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('amenity_groups');
    }
};