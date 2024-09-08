<?php

namespace Database\Seeders;

use App\Models\TetfundBook;
use Illuminate\Database\Seeder;

class TetFundBookSeeder extends Seeder
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
            ['name'=>'IYANDA OLADIMEJI', 'dpt'=>'ENVIROMENT', 'book_title'=>'PLANNING STUDIO DESIGN', 'year'=>'2012-2014', 'status'=>'Completed & Paid']
        ];

        foreach($run as $runs){
            TetfundBook::create($runs);
        }
    }
}
