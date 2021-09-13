<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
class NewSeeder extends Seeder
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
            ['title'=>'Fagbemi Promises To Reinstate SUG In Yabatech', 'content'=>'Prince Lateef Fagbemi SAN, the Chairman Governing Council of Yaba College of Technology (YABATECH), has promised the students of the institution that the suspension placed on the Student Union Government (SUG) by the previous Governing Council led by Barrister Ebenezer Babatope would be lifted after certain conditions are met.', 'image'=>'sug.jpg', 'school_id'=>2, 'status'=>1, 'posted_by'=>1],
            ['title'=>'Yabatech Plans N50b Endowment Fund To Improve Facilities, As Rector Praises The Sun, Seeks Partnership', 'content'=>'RECTOR of Yaba College of Technology (YABATECH), Engr. Obafemi Omokungbe has revealed that the institution is planning a N50 billion endowment fund to improve facilities and restore the lost glory of the institution.

            Omokungbe disclosed this recently, when management of The Sun Publishing Limited led by the Managing Director/Editor-in-Chief, Mr. Onuoha Ukeh paid a courtesy visit to the institution.', 'image'=>'sun.jpg', 'school_id'=>2, 'status'=>1, 'posted_by'=>1],
            ['title'=>'Yabatech Honours Art Icon, Ekundaye, At 70', 'content'=>'The Yaba College of Technology (Yabatech) Art Museum, recently honoured Nike Ekundaye, the art legend, on her 70th birthday, during its exhibition.
            The event, which took place at the School of Art, Design and Printing, was hosted by the museum with the theme “Living Blue, an Archive Retrospective.”
            The art exhibition, to assist researchers, which centered on presentation on the life and practice of Ekundaye, showcased the art-works of the professional textile artist.', 'image'=>'hono.jpeg', 'school_id'=>2, 'status'=>1, 'posted_by'=>1],
            ['title'=>'YABATECH Welcomes Applications To September 2021 Music Certificate Course', 'content'=>'Yaba College of Technology through YABATECH Consult Limited in corroboration with Diamond Well Integrated Concepts Limited announces September 2021 Music Certificates Course Admission in Music Production and Engineering, Music Law and Music Business.

            The September Admission is the second set after the successful completion of the first set where students are taught and are introduced to the nitty gritty of music production in the serene, safe and conducive environment of the YABATEC', 'image'=>'music.jpg', 'school_id'=>2, 'status'=>1, 'posted_by'=>1],
            ['title'=>'Mushin Rotary Club Donates Books To Yabatech', 'content'=>'The Rotary Club of Mushin Golden led by its President Mr. David Chidozie were in Yaba College of Technology (Yabatech) lately to contribute their own quota to the development of education in Nigeria by donating educative books to the College. They were highly magnanimous by donating 11 copies of Physics Mathematics by Jude Ndubuisi Onichi; 1 copy of Organic Chemistry by Brown and Frote, 1 copy of Organic Chemistry by William H. Brown, 1 copy of Organic Chemistry by G. Marc London, and 1 copy of Inorganic Chemistry by Gary L. Miessler and Donald A. Tarr to the College Library. The Rector of the Institution, Engr. Obafemi Omokungbe who was ably represented by the Deputy Rector Administration', 'image'=>'donate.jpg', 'school_id'=>2, 'status'=>1, 'posted_by'=>1],

        ];

        foreach($run as $runs){
            News::create($runs);
        }
    }
}
