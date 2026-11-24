<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prescription;

class PrescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'comments' => $this->faker->word(),
            'morning_med' => \App\Models\Medication::factory(),
            'afternoon_med' => \App\Models\Medication::factory(),
            'night_med' => \App\Models\Medication::factory(),
            'date' => $this->faker->date(),
        ];
    }
}
