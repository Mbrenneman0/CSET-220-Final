<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role_id' => \App\Models\Role::factory(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->email(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'password' => 'password',
            'DOB' => $this->faker->date(),
            'is_approved' => $this->faker->randomNumber(1),
        ];
    }
}
