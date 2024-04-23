<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\NoticeBoard;

class NoticeBoardSeeder extends Seeder
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

            ['headline'=>'2021/2022 ND/HND/B.SC EDUCATION 100 LEVEL & DIRECT ENTRY Part Time Application Form Is Out', 'content'=>'ADVERTISEMENT FOR APPLICATION FOR 2021/2022 ADMISSIONS INTO HIGHER NATIONAL DIPLOMA/NATIONAL DIPLOMA/B.SC EDUCATION 100 LEVEL & DIRECT ENTRY (PART TIME) IN AFFILIATION WITH UNIVERSITY OF NIGERIA NSUKKA AND CERTIFICATE PROGRAMMES.

            Applications are hereby invited from suitably qualified candidates for admission into Part Time Programmes at Higher National Diploma/ National Diploma, B.Sc Education 100 level & Direct Entry (in affiliation with University of Nigeria Nsukka) and Certificate Programmes for the 2021/2022 academic session.', 'school_id'=>1, 'status'=>1],
            ['headline'=>'We Are Resolved To Serve With Dilligence And Commitment To The Growth Of Yabatech – Fagbemi', 'content'=>'The Chairman Governing Council of Yaba College of Technology (YABATECH), Prince Lateef fagbemi SAN, has assured the College Community that the Council is determined to ensure the institution experience growth and development in all ramifications. He made this remark at the inaugural meeting of the newly constituted council with staff of the College.

            Fagbemi disclosed that the council is coming with open minds and listening ears, and shall not only be fair to all but will be guided by the rule of law and due process in carrying out its mandate. He noted that staff motivation is essential to quality performance, and promised that the council shall ensure that what is required for the achievement of optimal staff motivation is put in place.
            
            He appreciated the Federal Government for re-appointing him as the Governing Council Chairman for the second time which has never happened before in the history of the College. He said that his appointment for the second time is an opportunity for him to serve humanity, and contribute his own quota to the development of education in Nigeria and in Yabatech in particular.', 'school_id'=>1, 'status'=>1]];
   
            foreach($run as $run){
                NoticeBoard::create($run);
            }
        }

   
}
