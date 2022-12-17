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
                'name' => 'شط العرب',
                'user_id' => 1,
                'address' => 'الهارثة',
                'type' => 1
            ]
        );
        //id 2
        System::create(
            [
                'name' => 'شط العرب',
                'user_id' => 1,
                'address' => 'الكباسي',
                'type' => 2
            ]
        );
        //id 3
        System::create(
            [
                'name' => 'شط العرب',
                'user_id' => 1,
                'address' => 'العشار',
                'type' => 3
            ]
        );
    }
}
