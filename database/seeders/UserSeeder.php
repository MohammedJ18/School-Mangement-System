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
        // id 1
        User::create([
            'name' => 'Mohammed',
            'email' => 'mohammed@gmail.com',
            'password' => bcrypt('12121212'),
            'birth_date' => '1999-01-01',
            'image_path' => 'img/users/dev1.jpg',
        ]);
        // id 2
        User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('12121212'),
            'birth_date' => '1999-01-01',
            'type'=>2,
        ]);
        // id 3
        User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('12121212'),
            'birth_date' => '1999-01-01',
        ]);
        // id 4
        User::create([
            'name' => 'parent',
            'email' => 'parent@gmail.com',
            'password' => bcrypt('12121212'),
            'birth_date' => '1999-01-01',
            'type'=>2,
        ]);
    }
}
