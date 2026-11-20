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
        Schema::create('patients', function (Blueprint $table) {
            $table->foreignId('patient_id')
                 -> primary()
                 -> constrained()
                 -> cascadeOnDelete();
            $table->integer('family_code') -> unique();
            $table->string('emergency_contact');
            $table->string('emergency_phone');
            $table->string('emergency_relation');
            $table->date('admission_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
