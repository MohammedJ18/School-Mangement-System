<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Guardian;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentAbsence;
use App\Models\Teacher;
use App\Models\User;
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

        // Lesson::factory()->count(400)->create();
        // StudentAbsence::factory()->count(10)->create();
        User::factory()->count(300)->create();
        Student::factory()->count(300)->create();
        Teacher::factory()->count(34)->create();
        Guardian::factory()->count(450)->create();

    }
}
