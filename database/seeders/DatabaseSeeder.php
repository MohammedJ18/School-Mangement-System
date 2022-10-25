<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            PersonSeeder::class,
            SectionSeeder::class,
            GroupSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class,
            AbsenceSeeder::class,
            GradeSeeder::class,
        ]);
    }
}
