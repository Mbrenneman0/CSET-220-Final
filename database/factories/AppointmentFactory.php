<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;

class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_id' => \App\Models\Employee::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'completed' => $this->faker->randomNumber(1),
        ];
    }
}
