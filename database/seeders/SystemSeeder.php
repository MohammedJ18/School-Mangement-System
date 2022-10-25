<?php

namespace Database\Seeders;

use App\Models\System;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id 1
        System::create(
            [
                'name' => 'اعدادية الهارثة للبنين',
                'user_id' => 1,
            ]
        );
        //id 2
        System::create(
            [
                'name' => 'اعدادية دجلة للبنات',
                'user_id' => 1,
            ]
        );
    }
}
