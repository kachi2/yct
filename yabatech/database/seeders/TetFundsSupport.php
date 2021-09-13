<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TetFundsIct;

class TetFundsSupport extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $run = [
            ['image'=>'sci.jpg', 'headline'=>'Engineering Building'],
            ['image'=>'bus.jpg', 'headline'=>'Bus Intervention'],
            ['image'=>'gen.jpg', 'headline'=>'Generator Intervention'],
            ['image'=>'multi.jpg', 'headline'=>'Multipurpose Building'],
            ['image'=>'tech.jpg', 'headline'=>'Food Technology Bbuilding'],
            
    ];

    foreach($run as $runs){
        TetFundsIct::create($runs);
    }
    }
}
