<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'شعبة A',
            'section_id' => 1,
        ]);
        Group::create([
            'name' => 'شعبة B',
            'section_id' => 1,
        ]);
        Group::create([
            'name' => 'شعبة C',
            'section_id' => 1,
        ]);
        Group::create([
            'name' => 'شعبة A',
            'section_id' => 2,
        ]);
        Group::create([
            'name' => 'شعبة B',
            'section_id' => 2,
        ]);
        Group::create([
            'name' => 'شعبة C',
            'section_id' => 2,
        ]);
    }
}
