<?php

namespace Database\Seeders;

use App\Models\NavList;
use Illuminate\Database\Seeder;

class NavListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navDropdownItems = [
            ['name' => 'About', 'menu_id' => 1],
            ['name' => 'Administration', 'menu_id' => 2],
            ['name' => 'Admissions', 'menu_id' => 3],
            ['name' => 'Special Intervention', 'menu_id' => 4],
            ['name' => 'Annual Intervention', 'menu_id' => 4],
//            ['name' => 'Students_m', 'menu_id' => 5],
            ['name' => 'Schools', 'menu_id' => 5],
            ['name' => 'CCS', 'menu_id' => 5],
            ['name' => 'Students', 'menu_id' => 5],
            ['name' => 'Service Units', 'menu_id' => 6],
            ['name' => 'Academic Units', 'menu_id' => 6],
            ['name' => 'Registry', 'menu_id' => 6],
            ['name' => 'Bursary', 'menu_id' => 6],
            ['name' => 'More', 'menu_id' => 7],
            ['name' => 'Staff', 'menu_id' => 7],
            ['name' => 'Alumni', 'menu_id' => 7],
            ['name' => 'Contact', 'menu_id' => 7],
        ];

        foreach ($navDropdownItems as $navDropdownItem) {
            NavList::create($navDropdownItem);
        }
    }
}
