<?php
// database/migrations/2024_01_01_000006_create_rooms_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_type_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->string('room_number');
            $table->unsignedTinyInteger('floor')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->unique('room_number');
            $table->index('room_type_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};