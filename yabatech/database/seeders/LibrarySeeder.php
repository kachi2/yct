<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Library;
class LibrarySeeder extends Seeder
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

            ['image'=>'home.jpg', 'about'=>'The library is the nerve-centre of the College. It is positioned to cater for the information needs of staff, students and the entire College community. It is rich in both print and electronic information resources that are aimed at improving teaching, learning and research activities. The personnel are seasoned information practitioners with wealth of experiences and willingness to provide necessary services that will facilitate career advancement and fulfillment of all stakeholders. It is responsible for the acquisition and processing of all the books, journals, e-books, e-journals, databases to meet the information needs of staff and students of the college community. The main Library and various School Libraries have a combined seating capacity for 1,740 readers.
            In order to ensure efficient service delivery, the library operations have been structured into six Departments as follows', 'gallery'=>'images.png']

        ];

        foreach($run as $runs){
            Library::create($runs);
        }
    }
}
