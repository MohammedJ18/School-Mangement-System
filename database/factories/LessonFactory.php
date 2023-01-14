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
            'start_time' => fake()->time('08:00:00', '09:00:00', '10:00:00', '11:00:00'),
            'end_time' => fake()->time('09:00:00', '10:00:00', '11:00:00', '12:00:00'),
            'day' => fake()->numberBetween(1, 7),
            'schedule_id' => 1,
            'section_id' => fake()->numberBetween(1, 8),
            'teacher_id' => fake()->numberBetween(1,1),
            'subject_id' => fake()->numberBetween(1, 6),
            'group_id' => fake()->numberBetween(1, 6),
            'system_hall_id' => fake()->numberBetween(1, 6),
            'system_id' => 1,
        ];
    }
}
