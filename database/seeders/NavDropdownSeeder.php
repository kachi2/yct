<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavDropdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navDropdownItems = [
            ['name' => 'Vision & Mission', 'link' => 'about.vision', 'nav_list_id' => 1],
            ['name' => 'History', 'link' => 'about.history', 'nav_list_id' => 1],

            ['name' => 'Visitor', 'link' => 'administration.visitor', 'nav_list_id' => 2],
            ['name' => 'Chairman Council', 'link' => 'administration.chairman_council', 'nav_list_id' => 2],
            ['name' => 'The Rector', 'link' => 'administration.rector', 'nav_list_id' => 2],
            ['name' => 'Governing Council', 'link' => 'administration.governing_council', 'nav_list_id' => 2],
            ['name' => 'Deputy Rector Academics', 'link' => 'administration.deputy_academics', 'nav_list_id' => 2],
            ['name' => 'Deputy Rector Administration', 'link' => 'administration.deputy_administration', 'nav_list_id' => 2],
            ['name' => 'Registrar', 'link' => 'administration.registrar', 'nav_list_id' => 2],
            ['name' => 'Bursar', 'link' => 'administration.bursar', 'nav_list_id' => 2],
            ['name' => 'Polytechnic Librarian', 'link' => 'administration.librarian', 'nav_list_id' => 2],

            ['name' => 'Programmes', 'link' => 'admission.programmes', 'nav_list_id' => 3],
            ['name' => 'Apply to Yabatech', 'link' => 'admission.apply_to_yct', 'nav_list_id' => 3],
            ['name' => 'Entry Requirements', 'link' => 'admission.entry_requirement', 'nav_list_id' => 3],
            ['name' => '2020/2021 ND Part Time Admission List 1', 'link' => 'admission.nd_pt', 'nav_list_id' => 3],
            ['name' => '2020/2021 HND Part Time Admission List 1', 'link' => 'admission.hnd_pt', 'nav_list_id' => 3],
            ['name' => 'Acceptance Fee', 'link' => 'admission.acceptance_fee', 'nav_list_id' => 3],

            ['name' => 'Academic Staff Training & Development', 'link' => 's_intervention.academic_staff', 'nav_list_id' => 4],
            ['name' => 'Education Support Services', 'link' => 's_intervention.education_support', 'nav_list_id' => 4],
            ['name' => 'Physical Infrastructure', 'link' => 's_intervention.physical_infrastructure', 'nav_list_id' => 4],
            ['name' => 'ICT Support Intervention', 'link' => 's_intervention.ict_support', 'nav_list_id' => 4],

            ['name' => 'High Impact', 'link' => 'a_intervention.high_impact', 'nav_list_id' => 5],
            ['name' => 'Library Development', 'link' => 'a_intervention.library_development', 'nav_list_id' => 5],
            ['name' => 'Book Development', 'link' => 'a_intervention.book_development', 'nav_list_id' => 5],
            ['name' => 'Training & Development', 'link' => 'a_intervention.training_development', 'nav_list_id' => 5],
            ['name' => 'Academic Manuscript Development', 'link' => 'a_intervention.academic_manuscript', 'nav_list_id' => 5],
            ['name' => 'Academic Research Journal and Conferences Development', 'link' => 'a_intervention.journal_conferences', 'nav_list_id' => 5],
            ['name' => 'Zonal Intervention', 'link' => 'a_intervention.zonal_intervention', 'nav_list_id' => 5],
            ['name' => 'Disaster Recovery', 'link' => 'a_intervention.disaster_recovery', 'nav_list_id' => 5],
            ['name' => 'National Research Grant', 'link' => 'a_intervention.research_grant', 'nav_list_id' => 5],

//            ['name' => 'Student Portal', 'link' => 'student.portal', 'nav_list_id' => 6],
//            ['name' => 'Email', 'link' => 'student.email', 'nav_list_id' => 6],
//            ['name' => 'Sports & Societies', 'link' => 'student.sport_societies', 'nav_list_id' => 6],
//            ['name' => 'Download', 'link' => 'student.downloads', 'nav_list_id' => 6],

            ['name' => 'Art, Design & Printing', 'link' => 'schools.adp', 'nav_list_id' => 6],
            ['name' => 'Engineering', 'link' => 'schools.engineering', 'nav_list_id' => 6],
            ['name' => 'Environmental Studies', 'link' => 'schools.environmental', 'nav_list_id' => 6],
            ['name' => 'Liberal Studies', 'link' => 'schools.liberal', 'nav_list_id' => 6],
            ['name' => 'Management & Business Studies Studies', 'link' => 'schools.smbs', 'nav_list_id' => 6],
            ['name' => 'Technical Education', 'link' => 'schools.technical', 'nav_list_id' => 6],
            ['name' => 'Science', 'link' => 'schools.science', 'nav_list_id' => 6],
            ['name' => 'Technology', 'link' => 'schools.technology', 'nav_list_id' => 6],

            ['name' => 'Weekend Programmes', 'link' => 'ccs.weekend-programmes', 'nav_list_id' => 7],
            ['name' => 'Weekday/Evening Programmes', 'link' => 'ccs.weekday', 'nav_list_id' => 7],

            ['name' => 'Student Affairs', 'link' => 'students.student-affairs', 'nav_list_id' => 8],
            ['name' => 'Student Portal', 'link' => 'students.portal', 'nav_list_id' => 8],
            ['name' => 'Student Email', 'link' => 'students.email', 'nav_list_id' => 8],
            ['name' => 'Sports & Societies ', 'link' => 'students.sports-societies', 'nav_list_id' => 8],
            ['name' => 'Handbook', 'link' => 'students.handbook', 'nav_list_id' => 8],
            ['name' => 'Downloads', 'link' => 'students.downloads', 'nav_list_id' => 8],
            ['name' => 'Calenders', 'link' => 'students.calenders', 'nav_list_id' => 8],

            ['name' => 'Audit', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'Centre for Information Technology & Management', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'Medical Services', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'Physical Planning', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'SERVICOM', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'Skills Acquisition Centre', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'Student Industrial Work Experience Scheme', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'Transport', 'link' => 'service-units.audit', 'nav_list_id' => 9],
            ['name' => 'works and Services', 'link' => 'service-units.audit', 'nav_list_id' => 9],

            ['name' => 'Academic & Planning Unit', 'link' => 'service-units.audit', 'nav_list_id' => 10],
            ['name' => 'Applied Research & Technology Innovation', 'link' => 'service-units.audit', 'nav_list_id' => 10],
            ['name' => 'Centre for Entrepreneurship Development', 'link' => 'service-units.audit', 'nav_list_id' => 10],
            ['name' => 'College Central Research Laboratory', 'link' => 'service-units.audit', 'nav_list_id' => 10],
            ['name' => 'Internal Quality Assurance', 'link' => 'service-units.audit', 'nav_list_id' => 10],

            ['name' => 'Academic Board Matters', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Academic Records', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Academic Staff Personnel', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Admissions', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Alumni Relations', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Centre for Continuous Studies', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Council Affairs', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Epe Campus', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'Examination Matters', 'link' => 'registry.audit', 'nav_list_id' => 10],
            ['name' => 'General Administration/Legal Matters', 'link' => 'registry.audit', 'nav_list_id' => 10],
        ];
    }
}
