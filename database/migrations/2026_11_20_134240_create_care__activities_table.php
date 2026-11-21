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
            $table->foreignId('caregiver_id')->constrained('employees','employee_id')->cascadeOnDelete();
            $table->foreignId('patient_id')->constrained('patients','patient_id')->cascadeOnDelete();
            $table->date('date');
            $table->timestamps();
            $table->boolean('morning_med')->default(false);
            $table->boolean('afternoon_med')->default(false);
            $table->boolean('night_med')->default(false);
            $table->boolean('morning_meal')->default(false);
            $table->boolean('afternoon_meal')->default(false);
            $table->boolean('night_meal')->default(false);

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
