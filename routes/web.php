<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Check2faController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\PageController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;

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
Route::get('/school/staffs/{id}', [SchoolController::class, 'schoolStaff'])->name('schoolStaff');
Route::get('/school/history/{id}', [SchoolController::class, 'schoolHistory'])->name('schoolHistory');
Route::get('/school/deans/{id}', [SchoolController::class, 'schoolDeans'])->name('school.deans');


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
    Route::get('journal_conferences', [SchoolController::class, 'TetFundResearch'])->name('journal_conferences');
    Route::get('/tetfunds/research', [SchoolController::class, 'TetFundResearch'])->name('research_grant');
});

Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {
    Route::get('list', [SchoolController::class, 'StaffList'])->name('list');
    Route::get('profile/{id}', [SchoolController::class, 'StaffDetails'])->name('profile');
    Route::get('portal', [SchoolController::class, 'StaffPortal'])->name('portal');
    Route::get('e_learning', [SchoolController::class, 'StaffLearning'])->name('e_learning');
    Route::get('email', [SchoolController::class, 'StaffEmail'])->name('email');
    Route::get('accommodation', [SchoolController::class, 'StaffHousing'])->name('accommodation');
});

Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
    Route::get('portal', [PageController::class, 'StudentsPortal'])->name('portal');
    Route::get('donwloads', [PageController::class, 'Downloads'])->name('downloads');
    Route::get('calendar', [PageController::class, 'noPage'])->name('calenders');
    Route::get('sports_societies', [PageController::class, 'noPage'])->name('sports_societies');
});

Route::group(['prefix' => 'enterprise', 'as' => 'enterprise.'], function () {
    Route::get('service', [PageController::class, 'Enterprise'])->name('consult');   
});

// CCS Programmes
Route::group(['prefix' => 'ccs/programmes', 'as' => 'ccs.'], function () {
    Route::get('weekend', [PageController::class, 'noPage'])->name('weekend-programmes');
    Route::get('weekday', [PageController::class, 'noPage'])->name('weekday');
});


// Alumni
Route::group(['prefix' => 'alumni', 'as' => 'alumni.'], function () {
    Route::get('transcript_guidelines', [PageController::class, 'noPage'])->name('transcript_guidelines');
    Route::get('portal', [PageController::class, 'graduatePortal'])->name('portal');
    Route::get('relations', [PageController::class, 'noPage'])->name('relations');
});

Route::group(['prefix' => '', 'as' => 'more.'], function (){
    Route::get('epe_campus', [PageController::class, 'noPage'])->name('epe_campus');
    Route::get('e-journal', [PageController::class, 'noPage'])->name('e-journal');
    Route::get('fsdc', function () {
        return redirect('https://yctfsdc.org/');
    })->name('fsdc');
});
#===================================== end of frontend routes =====================



#==================Admin Routes =========================
// Route::domain('latechserver.com.ng')->prefix('admin')->group(function(){
    require __DIR__.'/auth.php';
Route::prefix('admin')->group(function(){

    Route::get('/2fa', [Check2faController::class, 'Index'])->name('check2fa');
    Route::post('/2fa/verify/', [Check2faController::class, 'VerifyCode'])->name('VerifyCodes');
    Route::middleware(['auth','check2fa'])->group(function(){
        
Route::get('/', [AdminController::class, 'index'])->name('admin.index');
Route::get('/administration', [AdminController::class, 'adminIndex'])->name('pages.administration');
Route::get('/administration/create', [AdminController::class, 'createAdministration'])->name('administration.create');
Route::post('/administration/store', [AdminController::class, 'StoreAdministration'])->name('administration.store');
Route::get('/administration/edit/{id}', [AdminController::class, 'editAdministration'])->name('administration.edit');
Route::post('/administration/update/{id}', [AdminController::class, 'updateAdministration'])->name('administration.update');
Route::get('/administration/disable/{id}', [AdminController::class, 'disableAdministration'])->name('administration.disabled');
Route::get('/administration/enaable/{id}', [AdminController::class, 'enableAdministration'])->name('administration.enable');
Route::get('/admission/list', [AdminController::class, 'AdmissionIndex'])->name('admission.list');
Route::get('/admission/create', [AdminController::class, 'AdmissionCreate'])->name('admission.create');
Route::post('/admission/store/', [AdminController::class, 'AdmissionStore'])->name('admission.store');
Route::get('/admission/edit/{id}', [AdminController::class, 'AdmissionEdit'])->name('admission.edit');
Route::post('/admission/update/{id}', [AdminController::class, 'AdmissionUpdate'])->name('admission.update');
Route::get('/staff/list', [AdminController::class, 'StaffList'])->name('admin.staff.list');
Route::get('/staff/assign/{id}', [AdminController::class, 'StaffAssign'])->name('admin.staff.assign');
Route::post('/staff/assign/store/{id}', [AdminController::class, 'StaffAssignPost'])->name('staff.assignPost');
Route::get('/staff/create', [AdminController::class, 'StaffCreate'])->name('staff.create');
Route::post('/staff/store/', [AdminController::class, 'StaffStore'])->name('staff.store');
Route::get('/staff/edit/{id}', [AdminController::class, 'StaffEdit'])->name('staff.edit');
Route::post('/staff/update/{id}', [AdminController::class, 'StaffUpdate'])->name('staff.update');

Route::get('/staff/assign/school/office/{id}', [AdminController::class, 'StaffAssignOffice'])->name('admin.staff.assign.office');
Route::post('/staff/assign/school/office/store/{id}', [AdminController::class, 'StaffAssignOfficeStore'])->name('staff.assign.officeStore');
Route::get('/staff/hods/index', [AdminController::class, 'HodsIndex'])->name('admin.staff.Hods');
Route::get('/staff/dean/edit/message/{id}', [AdminController::class, 'deanEdit'])->name('admin.deanEdit');
Route::post('/staff/dean/update/message/{id}', [AdminController::class, 'deanUpdate'])->name('admin.deanUpdate');
Route::get('/staff/hod/edit/message/{id}', [AdminController::class, 'hodEdit'])->name('admin.hodEdit');
Route::post('/staff/hod/update/message/{id}', [AdminController::class, 'hodUpdate'])->name('admin.hodUpdate');


Route::get('/news/index', [AdminController::class, 'NewsIndex'])->name('news.index');
Route::get('/news/create', [AdminController::class, 'NewsCreate'])->name('news.create');
Route::post('/news/store', [AdminController::class, 'NewsStore'])->name('news.store');
Route::get('/news/edit/{id}', [AdminController::class, 'NewsEdit'])->name('news.edit');
Route::post('/news/update/{id}', [AdminController::class, 'NewsUpdate'])->name('news.update');

Route::get('/notice/index', [AdminController::class, 'NoticeIndex'])->name('notice.index');
Route::get('/notice/create', [AdminController::class, 'NoticeCreate'])->name('notice.create');
Route::post('/notice/store', [AdminController::class, 'NoticeStore'])->name('notice.store');
Route::get('/notice/edit/{id}', [AdminController::class, 'NoticeEdit'])->name('notice.edit');
Route::post('/notice/update/{id}', [AdminController::class, 'NoticeUpdate'])->name('notice.update');

Route::get('/schools/index', [AdminController::class, 'SchoolsIndex'])->name('admin.schools.index');
Route::get('/departments/index', [AdminController::class, 'DepartmentIndex'])->name('admin.departments.index');
Route::get('/schools/deans/index', [AdminController::class, 'DeansIndex'])->name('schools.deans');
Route::get('/schools/create', [AdminController::class, 'SchoolCreate'])->name('admin.school.create');
Route::post('/schools/store', [AdminController::class, 'SchoolStore'])->name('admin.school.store');

Route::controller(SettingsController::class)->group(function(){
    Route::get('settings/index', 'Index')->name('admin.settings.index');
    Route::get('settings/socials', 'Socials')->name('admin.settings.socials');
    Route::post('settings/update/socials', 'UpdateSocials')->name('admin.settings.updateSocials');
    Route::post('settings/update/settings', 'UpdateSettings')->name('admin.settings.updateSettings');
    Route::get('admin/user', 'UserAccount')->name('admin.userAccount');
    Route::post('admin/uuser/account', 'UpdateAccount')->name('admin.UpdateAccount');
});

//units routes

Route::get('/units/index', [AdminController::class, 'Unitsindex'])->name('admin.units.index');

});
});





#=================end of Admin routes








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



// Students

// Service Units



// Contact
Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('contact_us', [PageController::class, 'contact'])->name('contact_us');
    Route::get('social_media', [PageController::class, 'careerDetail'])->name('social_media');
    Route::get('buildings_in_college', [PageController::class, 'careerDetail'])->name('buildings_in_college');
    Route::get('faq', [PageController::class, 'faq'])->name('faq');
    Route::get('careers', [PageController::class, 'careers'])->name('careers');
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
