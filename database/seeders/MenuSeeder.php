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
            ['name' => 'About'],
            ['name' => 'Administration'],
            ['name' => 'Admissions'],
            ['name' => 'TETFund'],
//            ['name' => 'Students'],
            ['name' => 'Academics'],
            ['name' => 'Units'],
            ['name' => 'More']
        ];
        foreach ($menuItems as $menuItem) {
            Menu::create($menuItem);
        }
    }
}
