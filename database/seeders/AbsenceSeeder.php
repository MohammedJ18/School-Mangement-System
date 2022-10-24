<?php

namespace Database\Seeders;

use App\Models\Absence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absence::create([
            'person_id' => 1,
            'date' => '2021-01-01',
            'reason' => 'غايب راح يشوف البيب',
        ]);
    }
}
