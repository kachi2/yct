<?php

namespace Database\Seeders;

use App\Models\NavDropdown;
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

            ['name' => 'Programmes', 'link' => 'admissions.programmes', 'nav_list_id' => 3],
            ['name' => 'Apply to Yabatech', 'link' => 'admissions.apply_to_yct', 'nav_list_id' => 3],
            ['name' => 'Entry Requirements', 'link' => 'admissions.entry_requirement', 'nav_list_id' => 3],
            ['name' => '2020/2021 ND Part Time Admission List 1', 'link' => 'admissions.nd_pt', 'nav_list_id' => 3],
            ['name' => '2020/2021 HND Part Time Admission List 1', 'link' => 'admissions.hnd_pt', 'nav_list_id' => 3],
            ['name' => 'Acceptance Fee', 'link' => 'admissions.acceptance_fee', 'nav_list_id' => 3],

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

            ['name' => 'Weekend Programmes', 'link' => 'ccs.weekend-programmes', 'nav_list_id' => 6],
            ['name' => 'Weekday/Evening Programmes', 'link' => 'ccs.weekday', 'nav_list_id' => 6],

            ['name' => 'Art, Design & Printing', 'link' => 'schools.adp', 'nav_list_id' => 7],
            ['name' => 'Engineering', 'link' => 'schools.engineering', 'nav_list_id' => 7],
            ['name' => 'Environmental Studies', 'link' => 'schools.environmental', 'nav_list_id' => 7],
            ['name' => 'Liberal Studies', 'link' => 'schools.liberal', 'nav_list_id' => 7],
            ['name' => 'Management & Business Studies Studies', 'link' => 'schools.smbs', 'nav_list_id' => 7],
            ['name' => 'Technical Education', 'link' => 'schools.technical', 'nav_list_id' => 7],
            ['name' => 'Science', 'link' => 'schools.science', 'nav_list_id' => 7],
            ['name' => 'Technology', 'link' => 'schools.technology', 'nav_list_id' => 7],

            ['name' => 'Student Affairs', 'link' => 'students.student_affairs', 'nav_list_id' => 8],
            ['name' => 'Student Portal', 'link' => 'students.portal', 'nav_list_id' => 8],
            ['name' => 'Student Email', 'link' => 'students.email', 'nav_list_id' => 8],
            ['name' => 'Sports & Societies ', 'link' => 'students.sports_societies', 'nav_list_id' => 8],
            ['name' => 'Handbook', 'link' => 'students.handbook', 'nav_list_id' => 8],
            ['name' => 'Downloads', 'link' => 'students.downloads', 'nav_list_id' => 8],
            ['name' => 'Calenders', 'link' => 'students.calenders', 'nav_list_id' => 8],

            ['name' => 'Audit', 'link' => 'service_units.audit', 'nav_list_id' => 9],
            ['name' => 'Centre for Information Technology & Management', 'link' => 'service_units.citm', 'nav_list_id' => 9],
            ['name' => 'Medical Services', 'link' => 'service_units.medical_services', 'nav_list_id' => 9],
            ['name' => 'Physical Planning', 'link' => 'service_units.physical_planning', 'nav_list_id' => 9],
            ['name' => 'SERVICOM', 'link' => 'service_units.servicom', 'nav_list_id' => 9],
            ['name' => 'Skills Acquisition Centre', 'link' => 'service_units.skill_acquisition_centre', 'nav_list_id' => 9],
            ['name' => 'Student Industrial Work Experience Scheme', 'link' => 'service_units.siwes', 'nav_list_id' => 9],
            ['name' => 'Transport', 'link' => 'service_units.transport', 'nav_list_id' => 9],
            ['name' => 'works and Services', 'link' => 'service_units.work_services', 'nav_list_id' => 9],

            ['name' => 'Academic & Planning Unit', 'link' => 'academic_units.academic_planning', 'nav_list_id' => 10],
            ['name' => 'Applied Research & Technology Innovation', 'link' => 'academic_units.research_technology', 'nav_list_id' => 10],
            ['name' => 'Centre for Entrepreneurship Development', 'link' => 'academic_units.ced', 'nav_list_id' => 10],
            ['name' => 'College Central Research Laboratory', 'link' => 'academic_units.central_laboratory', 'nav_list_id' => 10],
            ['name' => 'Internal Quality Assurance', 'link' => 'academic_units.iqa', 'nav_list_id' => 10],

            ['name' => 'Academic Board Matters', 'link' => 'registry.academic_board', 'nav_list_id' => 11],
            ['name' => 'Academic Records', 'link' => 'registry.academic_records', 'nav_list_id' => 11],
            ['name' => 'Academic Staff Personnel', 'link' => 'registry.academic_staff', 'nav_list_id' => 11],
            ['name' => 'Admissions', 'link' => 'registry.admissions', 'nav_list_id' => 11],
            ['name' => 'Alumni Relations', 'link' => 'registry.alumni_relations', 'nav_list_id' => 11],
            ['name' => 'Centre for Continuous Studies', 'link' => 'registry.ccs', 'nav_list_id' => 11],
            ['name' => 'Council Affairs', 'link' => 'registry.council_affairs', 'nav_list_id' => 11],
            ['name' => 'Epe Campus', 'link' => 'registry.epe_campus', 'nav_list_id' => 11],
            ['name' => 'Examination Matters', 'link' => 'registry.examination_matters', 'nav_list_id' => 11],
            ['name' => 'General Administration/Legal Matters', 'link' => 'registry.administrative_matters', 'nav_list_id' => 11],

            ['name' => 'Budget & Expenditure', 'link' => 'bursary.budget_expenditure', 'nav_list_id' => 12],
            ['name' => 'Cashbook & Reconciliation', 'link' => 'bursary.cashbook_reconciliation', 'nav_list_id' => 12],
            ['name' => 'Final Accounts', 'link' => 'bursary.final_accounts', 'nav_list_id' => 12],
            ['name' => 'Fixed Assets', 'link' => 'bursary.fixed_assets', 'nav_list_id' => 12],
            ['name' => 'Loans & Advances', 'link' => 'bursary.loans_advances', 'nav_list_id' => 12],
            ['name' => 'Staff Accounts', 'link' => 'bursary.staff_accounts', 'nav_list_id' => 12],
            ['name' => 'Student Account', 'link' => 'bursary.student_account', 'nav_list_id' => 12],
            ['name' => 'Treasury', 'link' => 'bursary.treasury', 'nav_list_id' => 12],

            ['name' => 'Consult', 'link' => 'more.consult', 'nav_list_id' => 13],
            ['name' => 'Library', 'link' => 'more.library', 'nav_list_id' => 13],
            ['name' => 'Payments', 'link' => 'more.payments', 'nav_list_id' => 13],
            ['name' => 'News', 'link' => 'more.news', 'nav_list_id' => 13],
            ['name' => 'Events', 'link' => 'more.events', 'nav_list_id' => 13],
            ['name' => 'Epe Campus', 'link' => 'more.epe_campus', 'nav_list_id' => 13],
            ['name' => 'Announcements', 'link' => 'more.announcements', 'nav_list_id' => 13],
            ['name' => 'e-Journal', 'link' => 'more.e-journal', 'nav_list_id' => 13],
            ['name' => 'FSDC', 'link' => 'more.fsdc', 'nav_list_id' => 13],

            ['name' => 'Staff List', 'link' => 'staff.list', 'nav_list_id' => 14],
            ['name' => 'Staff Portal', 'link' => 'staff.portal', 'nav_list_id' => 14],
            ['name' => 'E-learning', 'link' => 'staff.e_learning', 'nav_list_id' => 14],
            ['name' => 'Staff Email', 'link' => 'staff.email', 'nav_list_id' => 14],
            ['name' => 'Staff Accommodation', 'link' => 'staff.accommodation', 'nav_list_id' => 14],

            ['name' => 'Transcript Application Guidelines', 'link' => 'alumni.transcript_guidelines', 'nav_list_id' => 15],
            ['name' => 'Graduate Portal', 'link' => 'alumni.portal', 'nav_list_id' => 15],
            ['name' => 'Alumni Relations', 'link' => 'alumni.relations', 'nav_list_id' => 15],

            ['name' => 'Contact Us', 'link' => 'contact.contact_us', 'nav_list_id' => 16],
            ['name' => 'Social Media', 'link' => 'contact.social_media', 'nav_list_id' => 16],
            ['name' => 'Buildings in College', 'link' => 'contact.buildings_in_college', 'nav_list_id' => 16],
            ['name' => 'Knowledge Base', 'link' => 'contact.knowledge_base', 'nav_list_id' => 16],
            ['name' => 'Careers', 'link' => 'contact.careers', 'nav_list_id' => 16],
        ];

        foreach ($navDropdownItems as $navDropdownItem) {
            NavDropdown::create($navDropdownItem);
        }
    }
}
