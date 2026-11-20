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
        Schema::create('rosters', function (Blueprint $table) {
            $table->date('date')->primary();
            $table->foreignId('supervisor_id')
                ->constrained('employees', 'employee_id');
            $table->foreignId('doctor_id')
                ->constrained('employees', 'employee_id');
            $table->foreignId('caregiver_1')
                ->constrained('employees', 'employee_id');
            $table->foreignId('caregiver_2')
                ->constrained('employees', 'employee_id');
            $table->foreignId('caregiver_3')
                ->constrained('employees', 'employee_id');
            $table->foreignId('caregiver_4')
                ->constrained('employees', 'employee_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
