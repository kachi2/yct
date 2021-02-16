<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuItems = [
            [
                'name' => 'About',
                'status' => 1
            ],
            [
                'name' => 'Administration',
                'status' => 1
            ],
            [
                'name' => 'Admissions',
                'status' => 1
            ],
            [
                'name' => 'TETFund',
                'status' => 1
            ],
            [
                'name' => 'Students',
                'status' => 1
            ],
            [
                'name' => 'Academics',
                'status' => 1
            ],
            [
                'name' => 'Units',
                'status' => 1
            ],
            [
                'name' => 'More',
                'status' => 1
            ]
        ];
        foreach ($menuItems as $menuItem) {
            Menu::create($menuItem);
        }
    }
}
