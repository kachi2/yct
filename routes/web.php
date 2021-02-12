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

Route::group([''], function () {
    Route::get('vision', [PageController::class, 'vision'])->name('about.vision');
    Route::get('careers', [PageController::class, 'careers'])->name('pages.careers');
    Route::get('career-detail', [PageController::class, 'careerDetail'])->name('pages.career-detail');
    Route::get('contact', [PageController::class, 'contact'])->name('pages.contact');
    Route::get('events', [PageController::class, 'events'])->name('pages.events');
    Route::get('event-detail', [PageController::class, 'eventDetail'])->name('pages.event-detail');
    Route::get('faculty-detail', [PageController::class, 'facultyDetail'])->name('pages.faculty-detail');
    Route::get('faculties', [PageController::class, 'faculties'])->name('pages.faculties');
    Route::get('faq', [PageController::class, 'faq'])->name('pages.faq');
    Route::get('/', [PageController::class, 'index'])->name('pages.index');
    Route::get('privacy', [PageController::class, 'privacy'])->name('pages.privacy');
    Route::get('support', [PageController::class, 'support'])->name('pages.support');
});
Route::fallback(function () {
    return view('404');
})->name('fallback.404');
