<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Care_Activity;

class Care_ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'caregiver_id' => $this->faker->randomDigitNotNull(),
            'patient_id' => \App\Models\Patient::factory(),
            'date' => $this->faker->date(),
            'morning_med' => $this->faker->randomNumber(1),
            'afternoon_med' => $this->faker->randomNumber(1),
            'night_med' => $this->faker->randomNumber(1),
            'morning_meal' => $this->faker->randomNumber(1),
            'afternoon_meal' => $this->faker->randomNumber(1),
            'night_meal' => $this->faker->randomNumber(1),
            'employee_id' => \App\Models\Employee::factory(),
        ];
    }
}
