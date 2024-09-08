<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
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

            ['name'=> 'Audit Units', 'header_image'=>'audit.png', 'about'=>'The audit department is a unit within the rectory that is responsible for evaluating operational procedures.', 'images'=>'audit.jpg', 'status'=>1, 'slug'=>'audit'],
            ['name'=> 'CITM Units', 'header_image'=>'citm.png', 'about'=>'The Centre for Information Technology and Management (CITM) is a unit under the Rectory which provides important services such as: supporting delivery of Information Technology processing, development and implementation of software applications and adding credibility to all information generated in the College for management decision making. The Unit is also designing and implementing ICT strategies for the Polytechnic through human development capacities and maintenance of ICT infrastructure and Network services.', 'images'=>'citm.jpg', 'status'=>1, 'slug'=>'citm'],
            ['name'=> 'Medical Service Unit', 'header_image'=>'medical.png', 'about'=>'The Medical Centre is the unit where operations of all medical services for the College take place. It is a highly comprehensive medical centre with facilities such as medical laboratory services, x-ray, medical records, pharmacy, out-patient department, consulting rooms, nurses station, treatment rooms, minor theatre, observation rooms (wards) male and female with 3-4 beds in each room, immunization and dressing rooms, etc..', 'images'=>'medical.jpg', 'status'=>1, 'slug'=>'medical_services'],
            ['name'=> 'Academic Planning Units', 'header_image'=>'academic.png', 'about'=>'The Academic Planning Unit of Yaba College of Technology, Yaba is an academic organ of the College under the office of the Rector. It was established in October 2011 during the leadership of former Rector, Dr. (Mrs.) M. K. Ladipo. The Unit is controlled by a Director and assisted by other staff.VISION OF THE UNIT To be outstanding Academic Planning Unit among tertiary institutions that will make impact in teaching, learning and research.', 'images'=>'academic.jpg', 'status'=>1, 'slug'=>'academic_planning'],
            ['name'=> 'Academic Board Units', 'header_image'=>'board.png', 'about'=>'Coverage of all Academic Board Meetings.
            Follow up actions and implementation of all decisions taken at Academic Board meetings.
            Taking custody of Academic Board Records.
            Vetting of convocation programme.
            Collation of students’ awards.
            .', 'images'=>'board.jpg', 'status'=>1, 'slug'=>'academic_board'],
        ];

        foreach($run as $run){

            Unit::create($run);
        }
    }
}
