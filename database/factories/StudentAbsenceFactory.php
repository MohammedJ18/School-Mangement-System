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
            'student_id' => $this->faker->numberBetween(1, 250),
            'user_id' => $this->faker->numberBetween(1, 250),
            // date of NOW
            'date' => $this->faker->date('2023-01-14', 'now'),
            'reason' => $this->faker->sentence(),
        ];
    }
}
