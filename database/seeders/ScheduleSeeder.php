<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'title' => 'جدول الكورس الاول للمدرسة الابتدائية',
            'system_id' => 1,
        ]);
        Schedule::create([
            'title' => 'جدول الكورس الثاني للمدرسة الابتدائية',
            'system_id' => 1,
        ]);
    }
}
