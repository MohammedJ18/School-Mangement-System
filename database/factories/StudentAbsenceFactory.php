<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentAbsence>
 */
class StudentAbsenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 2),
            'user_id' => $this->faker->numberBetween(1, 4),
            'date' => $this->faker->date(),
            'reason' => $this->faker->sentence(),
        ];
    }
}
