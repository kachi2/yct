<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\PageController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\HomeController;

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

#====== school routes ======================================
Route::group(['domain' => '{school}.' . config('app.base_domain')], function () {
Route::get('/index', [SchoolController::class, 'index'])->name('schools');
});
//end 
#============ index pages ===========================
Route::get('/', [HomeController::class, 'index'])->name('pages.index');
Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');

#================= page routes ==================================
Route::get('administration/{name}', [PageController::class, 'administration'])->name('administration');
 Route::get('admission/{name}', [PageController::class, 'admission'])->name('admission');
 Route::get('page/{name}', [PageController::class, 'morePages'])->name('morePages');
 Route::get('pages/library', [PageController::class, 'Library'])->name('library');
//end 

#=======================Units Routs ====================
//Service Units 
Route::get('/units/{slug}', [UnitsController::class, 'Index'])->name('units');
Route::get('news', [HomeController::class, 'News'])->name('news');
Route::get('news/details/{id}', [HomeController::class, 'newsDetails'])->name('news.details');
Route::get('notice/details/{id}', [HomeController::class, 'noticeDetails'])->name('noticeDetails');
//end


Route::group(['prefix' => 'special-intervention', 'as' => 's_intervention.'], function () {
    Route::get('academic_staff', [SchoolController::class, 'TetFundTraining'])->name('academic_staff');
    Route::get('education_support', [PageController::class, 'careerDetail'])->name('education_support');
    Route::get('physical_infrastructure', [SchoolController::class, 'TetFundSupport'])->name('physical_infrastructure');
    Route::get('ict_support', [SchoolController::class, 'TetFundICT'])->name('ict_support');
});

Route::group(['prefix' => 'annual-intervention', 'as' => 'a_intervention.'], function () {
    Route::get('high_impact', [PageController::class, 'careerDetail'])->name('high_impact');
    Route::get('book_development', [SchoolController::class, 'TetFundBooks'])->name('book_development');
    Route::get('training_development', [SchoolController::class, 'TetFundTraining'])->name('training_development');
    Route::get('academic_manuscript', [PageController::class, 'careerDetail'])->name('academic_manuscript');
    Route::get('journal_conferences', [SchoolController::class, 'TetFundResearch'])->name('journal_conferences');
    Route::get('/tetfunds/research', [SchoolController::class, 'TetFundResearch'])->name('research_grant');
});










Route::get('privacy', [PageController::class, 'privacy'])->name('pages.privacy');
Route::get('support', [PageController::class, 'support'])->name('pages.support');
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
Route::get('research', [PageController::class, 'research'])->name('separate.research');

// About routes
Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
    Route::get('vision_and_mission', [PageController::class, 'vision'])->name('vision');
    Route::get('history', [PageController::class, 'history'])->name('history');
});


 


// CCS Programmes
Route::group(['prefix' => 'ccs/programmes', 'as' => 'ccs.'], function () {
    Route::get('weekend', [PageController::class, 'careerDetail'])->name('weekend-programmes');
    Route::get('weekday', [PageController::class, 'careerDetail'])->name('weekday');
});
// Students
Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
    Route::get('portal', [PageController::class, 'careerDetail'])->name('portal');
    Route::get('student_affairs', [PageController::class, 'careerDetail'])->name('student_affairs');
    Route::get('email', [PageController::class, 'careerDetail'])->name('students.email');
    Route::get('email', [PageController::class, 'careerDetail'])->name('student.handbook');
    Route::get('sports_societies', [PageController::class, 'careerDetail'])->name('sports_societies');
});
// Service Units

Route::group(['prefix' => '', 'as' => 'more.'], function () {
    Route::get('consult', [PageController::class, 'careerDetail'])->name('consult');
    Route::get('payments', [PageController::class, 'careerDetail'])->name('payments');
    Route::get('events', [PageController::class, 'events'])->name('events');
    Route::get('epe_campus', [PageController::class, 'careerDetail'])->name('epe_campus');
    Route::get('announcements', [PageController::class, 'careerDetail'])->name('announcements');
    Route::get('e-journal', [PageController::class, 'ejournal'])->name('e-journal');
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
