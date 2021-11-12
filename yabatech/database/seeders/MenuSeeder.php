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
            ['name' => 'TETFund_Special'],
            ['name' => 'TETFund_Annual'],
            ['name' => 'Academics_CCS'],
            ['name' => 'Academics_Schools'],
            ['name' => 'Academics_Students'],
            ['name' => 'Units_Service'],
            ['name' => 'Units_Academic'],
            ['name' => 'Units_Registry'],
            ['name' => 'Units_Bursary'],
            ['name' => 'More_Others'],
            ['name' => 'More_Staff'],
            ['name' => 'More_Alumni'],
            ['name' => 'More_Contact'],
            ['name' => 'Enterprise']
        ];
        foreach ($menuItems as $menuItem) {
            Menu::create($menuItem);
        }
    }
}
