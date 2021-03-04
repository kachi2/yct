<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('privacy', [PageController::class, 'privacy'])->name('pages.privacy');
Route::get('support', [PageController::class, 'support'])->name('pages.support');

// About routes
Route::group(['prefix' => 'about'], function () {
    Route::get('vision_and_mission', [PageController::class, 'vision'])->name('about.vision');
    Route::get('history', [PageController::class, 'history'])->name('about.history');
});
// Administration
Route::group(['prefix' => 'administration'], function () {
    Route::get('visitor', [PageController::class, 'careerDetail'])->name('administration.visitor');
    Route::get('chairman_council', [PageController::class, 'careerDetail'])->name('administration.chairman_council');
    Route::get('rector', [PageController::class, 'careerDetail'])->name('administration.rector');
    Route::get('governing_council', [PageController::class, 'careerDetail'])->name('administration.governing_council');
    Route::get('deputy_academics', [PageController::class, 'careerDetail'])->name('administration.deputy_academics');
    Route::get('deputy_administration', [PageController::class, 'careerDetail'])->name('administration.deputy_administration');
    Route::get('registrar', [PageController::class, 'careerDetail'])->name('administration.registrar');
    Route::get('bursar', [PageController::class, 'careerDetail'])->name('administration.bursar');
    Route::get('librarian', [PageController::class, 'careerDetail'])->name('administration.librarian');
});
// Admissions
Route::group(['prefix' => 'admissions'], function () {
    Route::get('programmes', [PageController::class, 'careerDetail'])->name('admissions.programmes');
    Route::get('apply_to_yct', [PageController::class, 'careerDetail'])->name('admissions.apply_to_yct');
    Route::get('entry_requirement', [PageController::class, 'careerDetail'])->name('admissions.entry_requirement');
    Route::get('nd_pt', [PageController::class, 'careerDetail'])->name('admissions.nd_pt');
    Route::get('hnd_pt', [PageController::class, 'careerDetail'])->name('admissions.hnd_pt');
    Route::get('acceptance_fee', [PageController::class, 'careerDetail'])->name('admissions.acceptance_fee');
});
// Special Intervention
Route::group(['prefix' => 'special-intervention'], function () {
    Route::get('academic_staff', [PageController::class, 'careerDetail'])->name('s_intervention.academic_staff');
    Route::get('education_support', [PageController::class, 'careerDetail'])->name('s_intervention.education_support');
    Route::get('physical_infrastructure', [PageController::class, 'careerDetail'])->name('s_intervention.physical_infrastructure');
    Route::get('ict_support', [PageController::class, 'careerDetail'])->name('s_intervention.ict_support');
});
// Annual Intervention
Route::group(['prefix' => 'annual-intervention'], function () {
    Route::get('high_impact', [PageController::class, 'careerDetail'])->name('a_intervention.high_impact');
    Route::get('library_development', [PageController::class, 'careerDetail'])->name('a_intervention.library_development');
    Route::get('book_development', [PageController::class, 'careerDetail'])->name('a_intervention.book_development');
    Route::get('training_development', [PageController::class, 'careerDetail'])->name('a_intervention.training_development');
    Route::get('academic_manuscript', [PageController::class, 'careerDetail'])->name('a_intervention.academic_manuscript');
    Route::get('journal_conferences', [PageController::class, 'careerDetail'])->name('a_intervention.journal_conferences');
    Route::get('zonal_intervention', [PageController::class, 'careerDetail'])->name('a_intervention.zonal_intervention');
    Route::get('disaster_recovery', [PageController::class, 'careerDetail'])->name('a_intervention.disaster_recovery');
    Route::get('research_grant', [PageController::class, 'careerDetail'])->name('a_intervention.research_grant');
});
// CCS Programmes
Route::group(['prefix' => 'ccs/programmes'], function () {
    Route::get('weekend', [PageController::class, 'careerDetail'])->name('ccs.weekend-programmes');
    Route::get('weekday', [PageController::class, 'careerDetail'])->name('ccs.weekday');
});
// Schools
Route::group(['prefix' => 'schools'], function () {
    Route::get('adp', [PageController::class, 'schoolDetail'])->name('schools.adp');
    Route::get('engineering', [PageController::class, 'schoolDetail'])->name('schools.engineering');
    Route::get('environmental_studies', [PageController::class, 'schoolDetail'])->name('schools.environmental');
    Route::get('liberal_studies', [PageController::class, 'schoolDetail'])->name('schools.liberal');
    Route::get('smbs', [PageController::class, 'schoolDetail'])->name('schools.smbs');
    Route::get('technical_education', [PageController::class, 'schoolDetail'])->name('schools.technical');
    Route::get('Science', [PageController::class, 'schoolDetail'])->name('schools.science');
    Route::get('technology', [PageController::class, 'schoolDetail'])->name('schools.technology');
});
// Students
Route::group(['prefix' => 'students'], function () {
    Route::get('portal', [PageController::class, 'careerDetail'])->name('students.portal');
    Route::get('student_affairs', [PageController::class, 'careerDetail'])->name('students.student_affairs');
    Route::get('email', [PageController::class, 'careerDetail'])->name('students.email');
    Route::get('sports_societies', [PageController::class, 'careerDetail'])->name('students.sports_societies');
    Route::get('handbook', [PageController::class, 'careerDetail'])->name('students.handbook');
    Route::get('downloads', [PageController::class, 'careerDetail'])->name('students.downloads');
    Route::get('calenders', [PageController::class, 'careerDetail'])->name('students.calenders');
});
// Service Units
Route::group(['prefix' => 'service-units'], function () {
    Route::get('audit', [PageController::class, 'careerDetail'])->name('service_units.audit');
    Route::get('citm', [PageController::class, 'careerDetail'])->name('service_units.citm');
    Route::get('medical_services', [PageController::class, 'careerDetail'])->name('service_units.medical_services');
    Route::get('physical_planning', [PageController::class, 'careerDetail'])->name('service_units.physical_planning');
    Route::get('servicom', [PageController::class, 'careerDetail'])->name('service_units.servicom');
    Route::get('skill_acquisition_centre', [PageController::class, 'careerDetail'])->name('service_units.skill_acquisition_centre');
    Route::get('siwes', [PageController::class, 'careerDetail'])->name('service_units.siwes');
    Route::get('transport', [PageController::class, 'careerDetail'])->name('service_units.transport');
    Route::get('work_&_services', [PageController::class, 'careerDetail'])->name('service_units.work_services');
});
// Academic Units
Route::group(['prefix' => 'academic-units'], function () {
    Route::get('academic_planning', [PageController::class, 'careerDetail'])->name('academic_units.academic_planning');
    Route::get('research_technology', [PageController::class, 'careerDetail'])->name('academic_units.research_technology');
    Route::get('ced', [PageController::class, 'careerDetail'])->name('academic_units.ced');
    Route::get('central_laboratory', [PageController::class, 'careerDetail'])->name('academic_units.central_laboratory');
    Route::get('iqa', [PageController::class, 'careerDetail'])->name('academic_units.iqa');
});
// Registry
Route::group(['prefix' => 'registry'], function () {
    Route::get('academic_board', [PageController::class, 'careerDetail'])->name('registry.academic_board');
    Route::get('academic_records', [PageController::class, 'careerDetail'])->name('registry.academic_records');
    Route::get('academic_staff', [PageController::class, 'careerDetail'])->name('registry.academic_staff');
    Route::get('admissions', [PageController::class, 'careerDetail'])->name('registry.admissions');
    Route::get('alumni_relations', [PageController::class, 'careerDetail'])->name('registry.alumni_relations');
    Route::get('ccs', [PageController::class, 'careerDetail'])->name('registry.ccs');
    Route::get('council_affairs', [PageController::class, 'careerDetail'])->name('registry.council_affairs');
    Route::get('epe_campus', [PageController::class, 'careerDetail'])->name('registry.epe_campus');
    Route::get('examination_matters', [PageController::class, 'careerDetail'])->name('registry.examination_matters');
    Route::get('administrative_or_legal_matters', [PageController::class, 'careerDetail'])->name('registry.administrative_matters');
});
// Bursary
Route::group(['prefix' => 'bursary'], function () {
    Route::get('budget_expenditure', [PageController::class, 'careerDetail'])->name('bursary.budget_expenditure');
    Route::get('cashbook_reconciliation', [PageController::class, 'careerDetail'])->name('bursary.cashbook_reconciliation');
    Route::get('final_accounts', [PageController::class, 'careerDetail'])->name('bursary.final_accounts');
    Route::get('fixed_assets', [PageController::class, 'careerDetail'])->name('bursary.fixed_assets');
    Route::get('loans_advances', [PageController::class, 'careerDetail'])->name('bursary.loans_advances');
    Route::get('staff_accounts', [PageController::class, 'careerDetail'])->name('bursary.staff_accounts');
    Route::get('student_account', [PageController::class, 'careerDetail'])->name('bursary.student_account');
    Route::get('treasury', [PageController::class, 'careerDetail'])->name('bursary.treasury');
});
// More
Route::group(['prefix' => 'more'], function () {
    Route::get('consult', [PageController::class, 'careerDetail'])->name('more.consult');
    Route::get('library', [PageController::class, 'careerDetail'])->name('more.library');
    Route::get('payments', [PageController::class, 'careerDetail'])->name('more.payments');
    Route::get('news', [PageController::class, 'careerDetail'])->name('more.news');
    Route::get('events', [PageController::class, 'events'])->name('more.events');
    Route::get('event-detail', [PageController::class, 'eventDetail'])->name('pages.event-detail');
    Route::get('epe_campus', [PageController::class, 'careerDetail'])->name('more.epe_campus');
    Route::get('announcements', [PageController::class, 'careerDetail'])->name('more.announcements');
    Route::get('e-journal', [PageController::class, 'careerDetail'])->name('more.e-journal');
    Route::get('fsdc', [PageController::class, 'careerDetail'])->name('more.fsdc');
});
// Staff
Route::group(['prefix' => 'staff'], function () {
    Route::get('list', [PageController::class, 'careerDetail'])->name('staff.list');
    Route::get('portal', [PageController::class, 'careerDetail'])->name('staff.portal');
    Route::get('e_learning', [PageController::class, 'careerDetail'])->name('staff.e_learning');
    Route::get('email', [PageController::class, 'careerDetail'])->name('staff.email');
    Route::get('accommodation', [PageController::class, 'careerDetail'])->name('staff.accommodation');
});
// Contact
Route::group(['prefix' => 'contact'], function () {
    Route::get('contact_us', [PageController::class, 'contact'])->name('contact.contact_us');
    Route::get('social_media', [PageController::class, 'careerDetail'])->name('contact.social_media');
    Route::get('buildings_in_college', [PageController::class, 'careerDetail'])->name('contact.buildings_in_college');
    Route::get('faq', [PageController::class, 'faq'])->name('contact.faq');
    Route::get('careers', [PageController::class, 'careers'])->name('contact.careers');
});
// Alumni
Route::group(['prefix' => 'alumni'], function () {
    Route::get('transcript_guidelines', [PageController::class, 'careerDetail'])->name('alumni.transcript_guidelines');
    Route::get('portal', [PageController::class, 'careerDetail'])->name('alumni.portal');
    Route::get('relations', [PageController::class, 'careerDetail'])->name('alumni.relations');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('login', function () {
        return view('admin.auth.login');
    })->name('admin.login');
    Route::get('forgot-password', function () {
        return view('admin.auth.forgot-password');
    })->name('admin.forgot-password');
});
Route::fallback(function () {
    return view('404');
})->name('fallback.404');
