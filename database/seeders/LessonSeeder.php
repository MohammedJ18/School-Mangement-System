<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
            [
                'start_time' => '08:00:00',
                'end_time' => '09:00:00',
                'day' => 1,
                'schedule_id' => 2,
                'section_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'group_id' => 1,
                'system_hall_id' => 1,
            ],
            [
                'start_time' => '09:00:00',
                'end_time' => '10:00:00',
                'day' => 1,
                'schedule_id' => 2,
                'section_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'group_id' => 1,
                'system_hall_id' => 1,
            ],
            [
                'start_time' => '10:00:00',
                'end_time' => '11:00:00',
                'day' => 1,
                'schedule_id' => 2,
                'section_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'group_id' => 1,
                'system_hall_id' => 1,
            ],
            [
                'start_time' => '11:00:00',
                'end_time' => '12:00:00',
                'day' => 1,
                'schedule_id' => 2,
                'section_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'group_id' => 1,
                'system_hall_id' => 1,
            ],
            [
                'start_time' => '12:00:00',
                'end_time' => '13:00:00',
                'day' => 1,
                'schedule_id' => 2,
                'section_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'group_id' => 1,
                'system_hall_id' => 1,
            ],
            [
                'start_time' => '13:00:00',
                'end_time' => '14:00:00',
                'day' => 6,
                'schedule_id' => 2,
                'section_id' => 1,
                'teacher_id' => 1,
                'subject_id' => 1,
                'group_id' => 1,
                'system_hall_id' => 1,
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
