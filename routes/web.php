<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');;
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/school/admission', [HomeController::class, 'admission'])->name('school.admission');
Route::get('/academic/faqs', [HomeController::class, 'faqs'])->name('academic.faqs');
Route::get('/academic/academic', [AcademicController::class, 'academic'])->name('academic.academic');
Route::get('academic/nursing', [AcademicController::class, 'nursing'])->name('academic.nursing');
Route::get('/academic/pptt', [AcademicController::class, 'pptt'])->name('academic.pptt');
Route::get('/academic/cna', [AcademicController::class, 'cna'])->name('academic.cna');
Route::get('/academic/orthopedics', [AcademicController::class, 'orthopedics'])->name('academic.orthopedics');
Route::get('/academic/programs', [AcademicController::class, 'programs'])->name('academic.programs');
Route::get('/academic/packages', [AcademicController::class, 'packages'])->name('academic.packages');
Route::get('/school/dean', [SchoolController::class, 'dean'])->name('school.dean');
Route::get('/school/team', [HomeController::class, 'team'])->name('school.team');
Route::get('/admin/payment', [HomeController::class, 'payment'])->name('admin.payment');
Route::get('/partials/contacts', [SchoolController::class, 'contacts'])->name('partials.contacts');
Route::get('/school/career', [SchoolController::class, 'career'])->name('school.career');
// show form
Route::get('/academic/application', [ApplicationController::class, 'create'])->name('academic.application');
// handle form submission
Route::post('/apply', [ApplicationController::class, 'store'])->name('academic.application.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/student/login', [HomeController::class, 'login'])->name('student.login');
Route::post('/student/login', [ContactController::class, 'login'])->name('login');

Route::get('/admin/students', function(){
 return view('admin.students',['students'=>Student::with('course')->get()]);
});

Route::middleware(['auth','admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function(){
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/applications',[ApplicationController::class,'index'])->name('applications.index');
        Route::post('/applications/{application}/approve',[ApplicationController::class,'approve'])->name('applications.approve');
        Route::post('/applications/{application}/reject',[ApplicationController::class,'reject'])->name('applications.reject');
        Route::resource('courses',CourseController::class);
});
