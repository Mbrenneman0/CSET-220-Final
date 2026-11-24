<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => \App\Models\User::factory(),
            'family_code' => $this->faker->unique()->randomNumber(),
            'emergency_contact' => $this->faker->word(),
            'emergency_phone' => $this->faker->word(),
            'emergency_relation' => $this->faker->word(),
            'admission_date' => $this->faker->date(),
        ];
    }
}
