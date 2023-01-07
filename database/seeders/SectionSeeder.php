<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'system_id' => 1,
            'name' => 'الصف الاول الابتدائي',
        ]);
        Section::create([
            'system_id' => 1,
            'name' => 'الصف الثاني الابتدائي',
        ]);
        Section::create([
            'system_id' => 1,
            'name' => 'الصف الثالث الابتدائي',
        ]);
        Section::create([
            'system_id' => 1,
            'name' => 'الصف الرابع الابتدائي',
        ]);
        Section::create([
            'system_id' => 1,
            'name' => 'الصف الخامس الابتدائي',
        ]);
        Section::create([
            'system_id' => 1,
            'name' => 'الصف السادس الابتدائي',
        ]);
        Section::create([
            'system_id' => 2,
            'name' => 'الصف الاول الابتدائي',
        ]);
        Section::create([
            'system_id' => 2,
            'name' => 'الصف الثاني الابتدائي',
        ]);
    }
}
