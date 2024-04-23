<?php

namespace Database\Seeders;

use App\Models\TetfundResearch;
use Illuminate\Database\Seeder;

class TetFundsResearch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $run = [

            ['lead_research'=>'NWAKANMA NDUBUISI M C', 'dpt'=>'SCIENCE', 'title'=>'GENETIC CHARACTERIZATION AND ISOLATION OF ANTI- PLASMODIAL COMPOUNDS FROM THE LEAVE OF VERONIA AMYGDALINA', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'ADEBAYO MIHEAL O', 'dpt'=>'SCIENCE', 'title'=>'FRAMEWORK FOR ASSESSING REWORK IN BULDING PROJECTS IN SOUTH-WEST NIGERIA', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'MORDI EMMANUEL', 'dpt'=>'ART', 'title'=>'ORGANIC SHELLS AITERNATIVE SOURCE OF CALCIUM CARBONATE FOR GERAMIC GLAZE FORMULATION ENVIROMENTAL PROTECTION', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'ENGR MOLOKWU I.M', 'dpt'=>'ENGINEERING', 'title'=>'DESIGNING AND FABRICATION OF UNMANNED UNDER WATER CRAFT FOR MARINE SECURITY OPERATION IN NIGERIA', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'AGBETUNDE LATEEF A', 'dpt'=>'MANAGEMENT', 'title'=>'PUBLIC- PRIVATE PARTNERSHIP AND TRANSPORT MANAGEMENT IN NIGERIA', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'DR MRS DOHERTY', 'dpt'=>'SCIENCE', 'title'=>'CONTROL AND UTILIZATION OF EICHHORNIA CRASSIPS (WATER HYACINTH )IN LAGOS', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'MRS ODUSANMI J ADELANKE', 'dpt'=>'SCIENCE', 'title'=>'SYNTHESIS OF SOME SULPHUR CONTAING TRICYCLIC HETROCYCLES WITH PHYSIOLOGICAL ACTIVITIES', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'DR MRS KANIFE UCHENNA C', 'dpt'=>'SCIENCE', 'title'=>'BIOLOGICAL CONTROL OF ANTHRACNOSE ANDCEROSPORA LEAF SPOT DISEASE CAPSICUM ANNUM(CHILLI PEPPER) AND CELOSIA ARGENTA (LAGOS SPINACH) GROWN IN LAGOS', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'KOLAWOLE JOSEPH', 'dpt'=>'SCIENCE', 'title'=>'ANTIFLAMMATORY AND WOUND HEATING POTENTIAL OF SELECTED MEDICAL PLANTS FROM SOUTH-WEST NIGERIA', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'OVIONA GODWIN O', 'dpt'=>'SCIENCE', 'title'=>'BIOLOGICAL EFFECTS OF POLLUTANTS ON FISH SPECIES COLLECTED FROM DIFFERENT PART OF THE LAGOS LAGOON: A HISTOPHTHOLOGICAL STUDY', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'EDEGHAGBA, BEATRICE', 'dpt'=>'SCIENCE', 'title'=>'ISOLATION AND CHARACTERIZATION OF DIESEL DEGRADING BACTERIA FROM AIR IN OIL POLLUTED SITES USING 165 RDNR GENE ANALYSIS', 'duration'=>'12 MONTH', 'year'=>'2012-2014'],
            ['lead_research'=>'OKOLIE PN', 'dpt'=>'SCHOOL OF TECHNOLOGY', 'title'=>'APPLICATION OF MICROBIAL GUMS AND LACTIC ACID BACTERIA FROM PALM SAP  AS STABILISZING AGENT AND PROBIOTICS IN YOUGHURT PRODUCTION', 'duration'=>'12 MONTH', 'year'=>'2012-2015'],
            ['lead_research'=>'ASHADE OLUFEMI', 'dpt'=>'TECHNOLOGY', 'title'=>'GINGER PEELS AS ALTERNATIVE FOR MAIZE IN FISH MEAL & ITS EFFECTS ON THE PHYSIOLOSY OF FISH', 'duration'=>'12 MONTH', 'year'=>'2012-2015'],
            ['lead_research'=>'SOLAKUNMI OLUWAJOBA', 'dpt'=>'SCIENCE', 'title'=>'APPLICATION OF MICROBIAL GUMS AND LACTIC ACID BACTERIA FROM PALM SAP  AS STABILISZING AGENT AND PROBIOTICS IN YOUGHURT', 'duration'=>'12 MONTH', 'year'=>'2012-2015'],
        ];

        foreach($run as $runs){
            TetfundResearch::create($runs);
        }
    }
}
