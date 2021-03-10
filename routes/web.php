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
Route::get('research', [PageController::class, 'research'])->name('separate.research');

// About routes
Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
    Route::get('vision_and_mission', [PageController::class, 'vision'])->name('vision');
    Route::get('history', [PageController::class, 'history'])->name('history');
});
// Administration
Route::group(['prefix' => 'administration', 'as' => 'administration.'], function () {
    Route::get('visitor', [PageController::class, 'careerDetail'])->name('visitor');
    Route::get('chairman_council', [PageController::class, 'careerDetail'])->name('chairman_council');
    Route::get('rector', [PageController::class, 'careerDetail'])->name('rector');
    Route::get('governing_council', [PageController::class, 'careerDetail'])->name('governing_council');
    Route::get('deputy_academics', [PageController::class, 'careerDetail'])->name('deputy_academics');
    Route::get('deputy_administration', [PageController::class, 'careerDetail'])->name('deputy_administration');
    Route::get('registrar', [PageController::class, 'careerDetail'])->name('registrar');
    Route::get('bursar', [PageController::class, 'careerDetail'])->name('bursar');
    Route::get('librarian', [PageController::class, 'careerDetail'])->name('librarian');
});
// Admissions
Route::group(['prefix' => 'admissions', 'as' => 'admissions.'], function () {
    Route::get('programmes', [PageController::class, 'careerDetail'])->name('programmes');
    Route::get('apply_to_yct', [PageController::class, 'careerDetail'])->name('apply_to_yct');
    Route::get('entry_requirement', [PageController::class, 'careerDetail'])->name('entry_requirement');
    Route::get('nd_pt', [PageController::class, 'careerDetail'])->name('nd_pt');
    Route::get('hnd_pt', [PageController::class, 'careerDetail'])->name('hnd_pt');
    Route::get('acceptance_fee', [PageController::class, 'careerDetail'])->name('acceptance_fee');
});
// Special Intervention
Route::group(['prefix' => 'special-intervention', 'as' => 's_intervention.'], function () {
    Route::get('academic_staff', [PageController::class, 'careerDetail'])->name('academic_staff');
    Route::get('education_support', [PageController::class, 'careerDetail'])->name('education_support');
    Route::get('physical_infrastructure', [PageController::class, 'careerDetail'])->name('physical_infrastructure');
    Route::get('ict_support', [PageController::class, 'careerDetail'])->name('ict_support');
});
// Annual Intervention
Route::group(['prefix' => 'annual-intervention', 'as' => 'a_intervention.'], function () {
    Route::get('high_impact', [PageController::class, 'careerDetail'])->name('high_impact');
    Route::get('library_development', [PageController::class, 'careerDetail'])->name('library_development');
    Route::get('book_development', [PageController::class, 'careerDetail'])->name('book_development');
    Route::get('training_development', [PageController::class, 'careerDetail'])->name('training_development');
    Route::get('academic_manuscript', [PageController::class, 'careerDetail'])->name('academic_manuscript');
    Route::get('journal_conferences', [PageController::class, 'careerDetail'])->name('journal_conferences');
    Route::get('zonal_intervention', [PageController::class, 'careerDetail'])->name('zonal_intervention');
    Route::get('disaster_recovery', [PageController::class, 'careerDetail'])->name('disaster_recovery');
    Route::get('research_grant', [PageController::class, 'careerDetail'])->name('research_grant');
});
// CCS Programmes
Route::group(['prefix' => 'ccs/programmes', 'as' => 'ccs.'], function () {
    Route::get('weekend', [PageController::class, 'careerDetail'])->name('weekend-programmes');
    Route::get('weekday', [PageController::class, 'careerDetail'])->name('weekday');
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
Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
    Route::get('portal', [PageController::class, 'careerDetail'])->name('portal');
    Route::get('student_affairs', [PageController::class, 'careerDetail'])->name('student_affairs');
    Route::get('email', [PageController::class, 'careerDetail'])->name('email');
    Route::get('sports_societies', [PageController::class, 'careerDetail'])->name('sports_societies');
    Route::get('handbook', [PageController::class, 'careerDetail'])->name('handbook');
    Route::get('downloads', [PageController::class, 'careerDetail'])->name('downloads');
    Route::get('calenders', [PageController::class, 'careerDetail'])->name('calenders');
});
// Service Units
Route::group(['prefix' => 'service-units', 'service_units.'], function () {
    Route::get('audit', [PageController::class, 'careerDetail'])->name('audit');
    Route::get('citm', [PageController::class, 'careerDetail'])->name('citm');
    Route::get('medical_services', [PageController::class, 'careerDetail'])->name('medical_services');
    Route::get('physical_planning', [PageController::class, 'careerDetail'])->name('physical_planning');
    Route::get('servicom', [PageController::class, 'careerDetail'])->name('servicom');
    Route::get('skill_acquisition_centre', [PageController::class, 'careerDetail'])->name('skill_acquisition_centre');
    Route::get('siwes', [PageController::class, 'careerDetail'])->name('siwes');
    Route::get('transport', [PageController::class, 'careerDetail'])->name('transport');
    Route::get('work_&_services', [PageController::class, 'careerDetail'])->name('work_services');
});
// Academic Units
Route::group(['prefix' => 'academic-units', 'as' => 'academic_units.'], function () {
    Route::get('academic_planning', [PageController::class, 'careerDetail'])->name('academic_planning');
    Route::get('research_technology', [PageController::class, 'careerDetail'])->name('research_technology');
    Route::get('ced', [PageController::class, 'careerDetail'])->name('ced');
    Route::get('central_laboratory', [PageController::class, 'careerDetail'])->name('central_laboratory');
    Route::get('iqa', [PageController::class, 'careerDetail'])->name('iqa');
});
// Registry
Route::group(['prefix' => 'registry', 'as' => 'registry.'], function () {
    Route::get('academic_board', [PageController::class, 'careerDetail'])->name('academic_board');
    Route::get('academic_records', [PageController::class, 'careerDetail'])->name('academic_records');
    Route::get('academic_staff', [PageController::class, 'careerDetail'])->name('academic_staff');
    Route::get('admissions', [PageController::class, 'careerDetail'])->name('admissions');
    Route::get('alumni_relations', [PageController::class, 'careerDetail'])->name('alumni_relations');
    Route::get('ccs', [PageController::class, 'careerDetail'])->name('ccs');
    Route::get('council_affairs', [PageController::class, 'careerDetail'])->name('council_affairs');
    Route::get('epe_campus', [PageController::class, 'careerDetail'])->name('epe_campus');
    Route::get('examination_matters', [PageController::class, 'careerDetail'])->name('examination_matters');
    Route::get('administrative_or_legal_matters', [PageController::class, 'careerDetail'])->name('administrative_matters');
});
// Bursary
Route::group(['prefix' => 'bursary', 'as' => 'bursary.'], function () {
    Route::get('budget_expenditure', [PageController::class, 'careerDetail'])->name('budget_expenditure');
    Route::get('cashbook_reconciliation', [PageController::class, 'careerDetail'])->name('cashbook_reconciliation');
    Route::get('final_accounts', [PageController::class, 'careerDetail'])->name('final_accounts');
    Route::get('fixed_assets', [PageController::class, 'careerDetail'])->name('fixed_assets');
    Route::get('loans_advances', [PageController::class, 'careerDetail'])->name('loans_advances');
    Route::get('staff_accounts', [PageController::class, 'careerDetail'])->name('staff_accounts');
    Route::get('student_account', [PageController::class, 'careerDetail'])->name('student_account');
    Route::get('treasury', [PageController::class, 'careerDetail'])->name('treasury');
});
// More
Route::group(['prefix' => '', 'as' => 'more.'], function () {
    Route::get('consult', [PageController::class, 'careerDetail'])->name('consult');
    Route::get('library', [PageController::class, 'careerDetail'])->name('library');
    Route::get('payments', [PageController::class, 'careerDetail'])->name('payments');
    Route::get('news', [PageController::class, 'careerDetail'])->name('news');
    Route::get('events', [PageController::class, 'events'])->name('events');
    Route::get('epe_campus', [PageController::class, 'careerDetail'])->name('epe_campus');
    Route::get('announcements', [PageController::class, 'careerDetail'])->name('announcements');
    Route::get('e-journal', [PageController::class, 'ejournal'])->name('e-journal');
    Route::get('event-detail', [PageController::class, 'eventDetail'])->name('pages.event-detail');
    Route::get('e-journal/ijss', function () {
        return redirect('http://ijssyabatech.com/');
    })->name('separate.ijss');
    Route::get('e-journal/ses-2013', function () {
        return response()->download('', '');
    })->name('separate.ses');
    Route::get('e-journal/yct-tech-2019', function () {
        return response()->download('', '');
    })->name('separate.yct-tech');

    Route::get('fsdc', function () {
        return redirect('https://yctfsdc.org/');
    })->name('fsdc');
});
// Staff
Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {
    Route::get('list', [PageController::class, 'careerDetail'])->name('list');
    Route::get('portal', [PageController::class, 'careerDetail'])->name('portal');
    Route::get('e_learning', [PageController::class, 'careerDetail'])->name('e_learning');
    Route::get('email', [PageController::class, 'careerDetail'])->name('email');
    Route::get('accommodation', [PageController::class, 'careerDetail'])->name('accommodation');
});
// Contact
Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('contact_us', [PageController::class, 'contact'])->name('contact_us');
    Route::get('social_media', [PageController::class, 'careerDetail'])->name('social_media');
    Route::get('buildings_in_college', [PageController::class, 'careerDetail'])->name('buildings_in_college');
    Route::get('faq', [PageController::class, 'faq'])->name('faq');
    Route::get('careers', [PageController::class, 'careers'])->name('careers');
});
// Alumni
Route::group(['prefix' => 'alumni', 'as' => 'alumni.'], function () {
    Route::get('transcript_guidelines', [PageController::class, 'careerDetail'])->name('transcript_guidelines');
    Route::get('portal', [PageController::class, 'careerDetail'])->name('portal');
    Route::get('relations', [PageController::class, 'careerDetail'])->name('relations');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('login', function () {
        return view('admin.auth.login');
    })->name('login');
    Route::get('forgot-password', function () {
        return view('admin.auth.forgot-password');
    })->name('forgot-password');
});
Route::fallback(function () {
    return view('404');
})->name('fallback.404');
