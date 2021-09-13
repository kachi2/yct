<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TetfundTraining;

class TetFundsTraining extends Seeder
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

            ['funding_date'=> '9/20/2017', 'name'=>'OGUNBISI MERCY ADENIKE', 'sex'=>'Female', 'programme'=>'Benchwork-BENCHWORK', 'university'=>'NANJING UNIVERSITY', 'country'=>'china', 'start_year'=>'2017', 'end_year'=> '2020', 'remark'=>'return'], 
            ['funding_date'=> '9/24/2009', 'name'=>'BALOGUN EMMANUEL M.', 'sex'=>'Male', 'programme'=>'Masters - Fashion Design', 'university'=>'UNIVERSITY OF SOUTHAMPTON', 'country'=>'United Kingdom', 'start_year'=>'2008', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '5/17/2010', 'name'=>'YEKINI NURENI ASAFA', 'sex'=>'Male', 'programme'=>'Masters - Computer', 'university'=>'UNIVERSITY OF LAGOS', 'country'=>'Nigeria', 'start_year'=>'2008', 'end_year'=> '2010', 'remark'=>'return'], 
            ['funding_date'=> '1/13/2011', 'name'=>'MUKAIL OLAWUYI OYEYEMI', 'sex'=>'Male', 'programme'=>'Masters - PUBLIC HEALTH', 'university'=>'UNIVERSITI MALAYSIA', 'country'=>'MALAYSIA', 'start_year'=>'2009', 'end_year'=> '2011', 'remark'=>'return'], 
            ['funding_date'=> '1/13/2011', 'name'=>'OMOLABI ABIMBOLA OLUFEMI', 'sex'=>'Female', 'programme'=>'Master - GEOGRAPHY', 'university'=>'UNIVERSITI IBADAN', 'country'=>'NIGERIA', 'start_year'=>'2010', 'end_year'=> '2013', 'remark'=>'return'], 
            ['funding_date'=> '1/13/2011', 'name'=>'ABIONA OLALEYE', 'sex'=>'Male', 'programme'=>'Masters - CIVIL ENGINEERING', 'university'=>'UNIVERSITI IBADAN', 'country'=>'NIGERIA', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '1/13/2011', 'name'=>'BADMUS ISMAILA', 'sex'=>'Male', 'programme'=>'Masters - MECHANICAL ENGINEERING', 'university'=>'UNIVERSITI IBADAN', 'country'=>'NIGERIA', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '1/13/2011', 'name'=>'OGUNREMI AYORINDE BOLUWAJI', 'sex'=>'Male', 'programme'=>'Masters - PHYSICS', 'university'=>'OLABISI ONABANJO UNIVERSITY', 'country'=>'NIGERIA', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '1/13/2011', 'name'=>'OLADOSU OLAKUNLE ABIMBOLA', 'sex'=>'Male', 'programme'=>'Masters - COMPUTER SCIENCE', 'university'=>'UNIVERSITY OF IBADAN', 'country'=>'NIGERIA', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '1/27/2011', 'name'=>'OLUWOLE CATHERINE FUNMI', 'sex'=>'Female', 'programme'=>'Masters - CIVIL ENGINEERING', 'university'=>'UNIVERSITY OF IBADAN', 'country'=>'NIGERIA', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '2/21/2012', 'name'=>'FALILAT IDOWU OLUBUNMI', 'sex'=>'Female', 'programme'=>'Masters - M.SC CONSTRUCTION LAW & DIAPUTE AND RESOLUTION', 'university'=>'UNIVERSITY OF CENTRAL LANCASHIRE', 'country'=>'UNITED KINGDOM', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '2/21/2012', 'name'=>'OJO OLANREWAJU', 'sex'=>'Male', 'programme'=>'Masters - M.TECH COMPUTER SCIENCE & TECH', 'university'=>'LADOKE AKINTOLA UNIVERSITY', 'country'=>'Nigeria', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '2/21/2012', 'name'=>'BEATRICE OLUKEMI ADEYOKUN', 'sex'=>'Female', 'programme'=>'Masters - M.SC LIBRARY INFORMATIONSCIENCE', 'university'=>'UNIVERSITY OF IBADAN', 'country'=>'Nigeria', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '2/21/2012', 'name'=>'GEOREGE LUKMAN ABOLAJI', 'sex'=>'Male', 'programme'=>'Masters - M.SC LIBRARY INFORMATIONSCIENCE', 'university'=>'UNIVERSITY OF IBADAN', 'country'=>'Nigeria', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '12/17/2012', 'name'=>'ORINTUNSIN TOYOSI KOLA', 'sex'=>'Male', 'programme'=>'Masters - M.ENG PRODUCTION ENGINEERING', 'university'=>'UNIVERSITY OF AGRIC, ABEOKUTA', 'country'=>'Nigeria', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '12/17/2012', 'name'=>'AKANBI OLADAYO KAYODE', 'sex'=>'Male', 'programme'=>'Masters - M.A VISUAL ARTS', 'university'=>'UNIVERSITY OF LAGOS', 'country'=>'Nigeria', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'], 
            ['funding_date'=> '12/17/2012', 'name'=>'OLADUNJOYE OLAWALE TAOFIK', 'sex'=>'Male', 'programme'=>'Masters - M.PHILOSOPHY', 'university'=>'BABCOCK UNIVERSITY', 'country'=>'Nigeria', 'start_year'=>'2010', 'end_year'=> '2012', 'remark'=>'return'],     
        ];

        foreach($run as$runs){
            TetfundTraining::create($runs);
        }
    }
}
