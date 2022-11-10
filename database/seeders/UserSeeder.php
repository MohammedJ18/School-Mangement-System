<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mohammed',
            'email' => 'mohammed@gmail.com',
            'password' => bcrypt('12121212'),
            'birth_date' => '1999-01-01',
        ]);
    }
}
