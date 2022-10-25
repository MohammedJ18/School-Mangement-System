<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'system_id' => 1,
            'name' => 'محمد عبد الرحمن',
            'username' => 'mohamed',
            'password' => '123456',
            'phone' => '059999999',
            'gender' => true,
            'birth_date' => '2000-01-01',
            'address' => 'الهارثة',
            // 'type' => 1,
        ]);
    }
}
