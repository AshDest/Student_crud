<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'firstname' => $this->faker->firstname,
           'lastname' => $this->faker->lastname,
           'email' => $this->faker->email,
           'phone' => $this->faker->phoneNumber,
        ];
    }
}
