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
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('feeType')->nullable();
            $table->string('categoryType')->nullable();
            $table->string('experienceType')->nullable();
            $table->date('selectedAppointmentDate')->nullable();
            $table->time('selectedAppointmentTime')->nullable();
            $table->string('appointmentType')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->text('full_address')->nullable();
            $table->text('consultancy_purpose')->nullable();
            $table->string('photo')->nullable();
            $table->string('aadhaar_card')->nullable();
            $table->string('occupation_document')->nullable();
            $table->string('status_occupation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peoples');
    }
};



