<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('known_advocates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('district')->nullable();
            $table->string('area_of_practice')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('known_advocates');
    }
};
