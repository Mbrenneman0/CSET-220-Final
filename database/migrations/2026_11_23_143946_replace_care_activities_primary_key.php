
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Preserve uniqueness of the original key
        Schema::table('care__activities', function (Blueprint $table) {
            $table->unique([
                'caregiver_id',
                'patient_id',
                'date'
            ]);
        });

        // 2. Remove the old composite primary key
        Schema::table('care__activities', function (Blueprint $table) {
            $table->dropPrimary();
        });

        // 3. Add a new auto-incrementing primary key
        Schema::table('care__activities', function (Blueprint $table) {
            $table->id()->first();
        });
    }

    public function down(): void
    {
        // 1. Remove the new primary key column
        Schema::table('care__activities', function (Blueprint $table) {
            $table->dropColumn('id');
        });

        // 2. Restore the composite primary key
        Schema::table('care__activities', function (Blueprint $table) {
            $table->primary([
                'caregiver_id',
                'patient_id',
                'date'
            ]);
        });

        // 3. Remove the extra unique constraint
        Schema::table('care__activities', function (Blueprint $table) {
            $table->dropUnique([
                'caregiver_id',
                'patient_id',
                'date'
            ]);
        });
    }
};
