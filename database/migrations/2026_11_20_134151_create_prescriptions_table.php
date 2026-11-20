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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->foreignId('patient_id')->constrained('patients', 'patient_id')->onCascadeDelete();
            $table->string('comments', 2048);
            $table->foreignId('morning_med')->constrained('Medications', 'medication_id');
            $table->foreignId('afternoon_med')->constrained('Medications', 'medication_id');
            $table->foreignId('night_med')->constrained('Medications', 'medication_id');

            $table->timestamps('date');

            $table->primary(['patient_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
