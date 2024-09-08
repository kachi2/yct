<?php

namespace Database\Seeders;

use App\Models\AdmissionList;
use Illuminate\Database\Seeder;

class AdmissionSeeder extends Seeder
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
            ['name'=>'HND FULL TIME ADMISSION LIST 2020/2021', 'ad_file'=>'hndft.pdf'],
            ['name'=>'HND FULL TIME SUPPLEMENTARY LIST 2020/2021', 'ad_file'=>'hndsup.pdf'],
            ['name'=>'ND/BSc FULL TIME ADMISSION LIST', 'ad_file'=>'ndbsc.pdf'],
            ['name'=>'ND FULL TIME SUPPLEMENTARY LIST 2020/2021', 'ad_file'=>'supp.pdf'],
            ['name'=>'PGD 2020/2021 FULL TIME ADMISSION LIST', 'ad_file'=>'pgd.pdf'],
            ['name'=>'BSC DIRECT ENTRY LIST 2020/2021', 'ad_file'=>'directentry1.pdf'],
            ['name'=>'ND BSC SUPPLEMENTARY LIST 1 2020/2021', 'ad_file'=>'ndbscsup1.pdf'],
            ['name'=>'HND SUPPLEMENTARY 2 2020/2021', 'ad_file'=>'hndsup2.pdf'],
            ['name'=>'HND SUPPLEMENTARY 2 2020/2021', 'ad_file'=>'hndsup2.pdf'],

        ];

        foreach($run as $runs){
            AdmissionList::create($runs);
        }
    }
}
