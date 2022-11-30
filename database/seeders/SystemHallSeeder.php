<?php

namespace Database\Seeders;

use App\Models\SystemHall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemHallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systemHalls = [
            [
                'name' => 'قاعة الخوارزمي',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة النهضة',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 2,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 2,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 2,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 2,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 2,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 1,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 2,
            ],
            [
                'name' => 'قاعة العلم العالمي',
                'system_id' => 1,
            ]
        ];

        foreach ($systemHalls as $systemHall) {
            SystemHall::create($systemHall);
        }
    }
}
