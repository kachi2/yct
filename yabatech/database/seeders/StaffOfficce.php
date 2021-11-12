<?php

namespace Database\Seeders;
use App\Models\StaffPost;
use Illuminate\Database\Seeder;

class StaffOfficce extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            ['name' => 'Dean'],
            ['name' => 'HOD'],
            ['name' => 'Assist. Dean'],
            ['name' => 'Assist. HOD']
        ];

        foreach($data as $dd){
            StaffPost::create($dd);
        }
    }
}
