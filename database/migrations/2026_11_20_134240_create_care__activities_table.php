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
        Schema::create('care__activities', function (Blueprint $table) {
            $table->foreignId('caregiverID')->constrained('employees','employee_id')->cascadeOnDelete();
            $table->foreignId('patient_id')->constrained('patients','patient_id')->cascadeOnDelete();
            $table->timestamps('date');
            $table->boolean('morning_med');
            $table->boolean('afternoon_med');
            $table->boolean('night_med');
            $table->boolean('morning_meal');
            $table->boolean('afternoon_meal');
            $table->boolean('night_meal');

            $table->primary(['caregiver_id','patient_id','date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('care__activities');
    }
};
