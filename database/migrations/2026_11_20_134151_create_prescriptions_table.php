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
            $table->foreignID('morning_med')->constrained('Medications', 'medication_id');
            $table->foreignID('afternoon_med')->constrained('Medications', 'medication_id');
            $table->foreignID('night_med')->constrained('Medications', 'medication_id');

            $table->timestamps('date');

            $table->primary(['patient_id','date']);
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
