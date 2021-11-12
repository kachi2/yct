<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $run = [
            ['name'=>'Nanre Charles Benedict', 'image'=>'benedict.jpg', 'email'=>'nanre.charlse@yabatech.edu.ng', 'department_id'=>2, 'departments'=>' Office Of The Dean', 'category_id'=>'3', 'designation'=>'CHIEF DATA PROCESSING ASSISTANT', 'Publications'=>null, 'qualification'=>null, 'research_areas'=>null],
            ['name'=>'Olaifa Oluwafemi Adeyinka', 'image'=>'prof.jpg', 'email'=>null, 'department_id'=>2, 'departments'=>'Office Of The Dean', 'category_id'=>'2', 'designation'=>'CHIEF DATA PROCESSING ASSISTANT', 'Publications'=>null, 'qualification'=>null, 'research_areas'=>null],
            ['name'=>'Olatunji Folashade Funmilola', 'image'=>'prof.jpg', 'email'=>null, 'department_id'=>2, 'departments'=>'Office Of The Dean', 'category_id'=>'2', 'designation'=>'CHIEF CLERICAL OFFICER', 'Publications'=>null, 'qualification'=>'Bachelor of Science (Demography & Social Statistics)', 'research_areas'=>null],
            ['name'=>'Adesokan Oluwakemi Adepero', 'image'=>'ola.jpg', 'email'=>'oluwakemi.adesokan@yabatech.edu.ng', 'department_id'=>2, 'departments'=>'Office Of The Dean', 'category_id'=>'2', 'designation'=>'SENIOR CONFIDENTIAL SECRETARY', 'Publications'=>null, 'qualification'=>'NATIONAL DIPLOMA (Office Technology Management), HIGHER NATIONAL DIPLOMA (Office Technology Management)', 'research_areas'=>null],
            ['name'=>'Alebiosu Kabiru Olatoye', 'image'=>'kabi.jpg', 'email'=>'olatoye.alebiosu@yabatech.edu.ng', 'department_id'=>2, 'departments'=>'Office Of The Dean', 'category_id'=>'2', 'designation'=>'SENIOR CLERICAL OFFICER', 'Publications'=>null, 'qualification'=>'NATIONAL DIPLOMA (Business Administration), HIGHER NATIONAL DIPLOMA (Business Administration)', 'research_areas'=>null],
            ['name'=>'Alli Hajarat Abdul, Mrs.', 'image'=>'ali.jpg', 'email'=>'hajarat.ali@yabatech.edu.ng', 'department_id'=>2, 'departments'=>'Office Of The Dean', 'category_id'=>'2', 'designation'=>'CHIEF DATA PROCESSING ASSISTANT', 'Publications'=>null, 'qualification'=>'NATIONAL DIPLOMA (Business Administration), HIGHER NATIONAL DIPLOMA (Business Administration)', 'research_areas'=>null],
        ];

        foreach($run as $runs){
            Staff::create($runs);
        }
    }
}
