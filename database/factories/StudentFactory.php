<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
            'group_id' => fake()->numberBetween(1, 2),
            //user id between 5 and 305 unique
            'user_id' => fake()->numberBetween(5, 300),
            'section_id' => fake()->numberBetween(1, 2),
            'system_id' => 1,
        ];
    }
}
