<?php

namespace Database\Seeders;

use App\Models\SportComplex;
use Illuminate\Database\Seeder;

class SportComplexSeeder extends Seeder
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
            ['image'=>'sports.jpg', 'headine'=>'sections', 'gallery'=>'sports.jpg'],
            ['image'=>'sport2.jpg', 'headine'=>'section one', 'gallery'=>'sports.jpg'],
            ['image'=>'sport3.jpg', 'headine'=>'section two', 'gallery'=>'sports.jpg'],
            ['image'=>'sport5.jpg', 'headine'=>'full sport complex view', 'gallery'=>'sports.jpg'],
            ['image'=>'sport6.jpg', 'headine'=>'section three', 'gallery'=>'sports.jpg'],    
    ];
    foreach($run as $runs){
        SportComplex::create($runs);
    }
    }
}
