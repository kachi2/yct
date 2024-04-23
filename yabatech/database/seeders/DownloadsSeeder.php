<?php

namespace Database\Seeders;

use App\Models\Download;
use Illuminate\Database\Seeder;

class DownloadsSeeder extends Seeder
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
        ['name' => 'ND and HND Attestation Form', 'd_file'=>'attestation.docx'],
        ['name' => 'Sexual Harassment and other forms of Gender-Based Violence Prohibition Policy', 'd_file'=>'sbv.pfd'],
        ];
        foreach($run as $runs){
            Download::create($runs);
        }
    }
}
