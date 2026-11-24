<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Roster;

class RosterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'supervisor_id' => $this->faker->randomDigitNotNull(),
            'doctor_id' => $this->faker->randomDigitNotNull(),
            'caregiver_1' => \App\Models\Employee::factory(),
            'caregiver_2' => \App\Models\Employee::factory(),
            'caregiver_3' => \App\Models\Employee::factory(),
            'caregiver_4' => \App\Models\Employee::factory(),
        ];
    }
}
