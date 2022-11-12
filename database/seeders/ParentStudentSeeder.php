<?php

namespace Database\Seeders;

use App\Models\ParentStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParentStudent::create([
            'guardian_id' => 1,
            'student_id' => 1,
        ]);

    }
}
