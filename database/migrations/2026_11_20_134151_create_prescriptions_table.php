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
            $table->foreignId('patient_id')->constrained('patients', 'patient_id')->cascadeOnDelete();
            $table->string('comments', 2048);
            $table->foreignID('morning_med')->constrained('medications', 'medication_id');
            $table->foreignID('afternoon_med')->constrained('medications', 'medication_id');
            $table->foreignID('night_med')->constrained('medications', 'medication_id');
            $table->date('date');
            $table->timestamps();

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
