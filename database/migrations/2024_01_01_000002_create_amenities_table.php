<?php
// database/migrations/2024_01_01_000002_create_amenities_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amenity_group_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->string('name');               // "Free WiFi", "Air Conditioning"
            $table->string('icon')->nullable();   // "fa-solid fa-wifi"
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();

            $table->index('amenity_group_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('amenities');
    }
};