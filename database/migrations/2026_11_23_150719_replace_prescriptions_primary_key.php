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
        // 1. Preserve uniqueness of the original key
        Schema::table('prescriptions', function (Blueprint $table) {
            $table->unique([
                'patient_id',
                'date'
            ]);
        });

        // 2. Remove the old composite primary key
        Schema::table('prescriptions', function (Blueprint $table) {
            $table->dropPrimary();
        });

        // 3. Add a new auto-incrementing primary key
        Schema::table('prescriptions', function (Blueprint $table) {
            $table->id()->first();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 1. Remove the new primary key column
        Schema::table('prescriptions', function (Blueprint $table) {
            $table->dropColumn('id');
        });

        // 2. Restore the composite primary key
        Schema::table('prescriptions', function (Blueprint $table) {
            $table->primary([
                'patient_id',
                'date'
            ]);
        });

        // 3. Remove the extra unique constraint
        Schema::table('prescriptions', function (Blueprint $table) {
            $table->dropUnique([
                'patient_id',
                'date'
            ]);
        });
    }
};
