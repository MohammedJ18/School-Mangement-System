<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'group_id' => 1,
            'user_id' => 1,
            'section_id' => 1,
        ]);

        Student::create([
            'group_id' => 1,
            'user_id' => 3,
            'section_id' => 1,
        ]);
    }
}
