<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SystemSeeder::class,
            SectionSeeder::class,
            GroupSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class,
            GradeSeeder::class,
            GuardianSeeder::class,
            ParentStudentSeeder::class,
            TeacherSeeder::class,
            SystemHallSeeder::class,
            ScheduleSeeder::class,
            LessonSeeder::class,
            SystemNotificationSeeder::class,
        ]);

        Lesson::factory()->count(200)->create();
    }
}
