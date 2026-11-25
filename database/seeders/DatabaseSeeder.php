<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Truncate all tables except the migrations table
        // Allows fresh data to be populated
        Schema::withoutForeignKeyConstraints(function() {
            foreach(Schema::getTables() as $table) {
                if ($table['name'] !== 'migrations'){
                    DB::table($table['name'])->truncate();
                }
            }
        });

        // Build new data
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            SupervisorSeeder::class,
            DoctorSeeder::class,
            CaregiverSeeder::class,
            PatientSeeder::class,
            FamilyMemberSeeder::class,
            MedicationSeeder::class,
            CareGroupSeeder::class

        ]);
    }
}
