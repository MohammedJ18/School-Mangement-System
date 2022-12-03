<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
            'day' => fake()->numberBetween(1, 7),
            'schedule_id' => fake()->numberBetween(1, 4),
            'section_id' => fake()->numberBetween(1, 4),
            'teacher_id' => fake()->numberBetween(1,1),
            'subject_id' => fake()->numberBetween(1, 6),
            'group_id' => fake()->numberBetween(1, 6),
            'system_hall_id' => fake()->numberBetween(1, 6),
            'system_id' => fake()->numberBetween(1, 2),
        ];
    }
}
