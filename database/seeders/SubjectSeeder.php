<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name' => 'الرياضيات',
            'section_id' => 1,
        ]);
        Subject::create([
            'name' => 'اللغة العربية',
            'section_id' => 1,
        ]);
        Subject::create([
            'name' => 'اللغة الانجليزية',
            'section_id' => 1,
        ]);
        Subject::create([
            'name' => 'الرياضيات',
            'section_id' => 2,
        ]);
        Subject::create([
            'name' => 'اللغة العربية',
            'section_id' => 2,
        ]);
        Subject::create([
            'name' => 'اللغة الانجليزية',
            'section_id' => 2,
        ]);
    }
}
