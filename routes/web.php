<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\NewuserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserdetailController;
use App\Models\Userdetail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index'])->name('welcome');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserdetailController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// STUDENT ROUTES
    Route::get('/science-students', [PagesController::class, 'science'])->name('science.students');
    Route::get('/art-students', [PagesController::class, 'art'])->name('art.students');
    Route::get('/add-student', [NewuserController::class, 'new'])->name('add.students');
    Route::post('/store-student', [NewuserController::class, 'add_student'])->name('add.student');

    // FACULTY ROUTES
    Route::get('/faculties', [FacultyController::class, 'index'])->name('all.faculties');
    Route::get('/add-faculties', [FacultyController::class, 'create'])->name('add.faculties');
    Route::post('/store-faculty', [FacultyController::class, 'store'])->name('store.faculties');

    // DEPARTMENT ROUTES
    Route::get('/departments', [DepartmentController::class, 'index'])->name('all.departments');
    Route::get('/add-department', [DepartmentController::class, 'create'])->name('add.department');
    Route::post('/store-department', [DepartmentController::class, 'store'])->name('store.department');

    // LECTURER ROUTES
    Route::get('/lecturers', [FacultyController::class, 'show'])->name('all.lecturers');
    Route::get('/add-lecturer', [NewuserController::class, 'add'])->name('add.lecturers');
    Route::post('/store-lecturers', [NewuserController::class, 'add_lecturer'])->name('add.lecturer');

    // COURSE ROUTES
    Route::get('/all-courses', [CourseController::class, 'index'])->name('all.courses');
    Route::get('/add-courses', [CourseController::class, 'create'])->name('add.courses');
    Route::post('/store-courses', [CourseController::class, 'store'])->name('store.courses');

    // PROFILE ROUTES
    Route::get('/profile-page', [UserdetailController::class, 'index'])->name('view.profile');
    Route::get('/update-profile', [UserdetailController::class, 'create'])->name('update.profile');
    Route::post('/student-profile', [UserdetailController::class, 'update_student'])->name('student.profile');
    Route::post('/lecturer-profile', [UserdetailController::class, 'update_lecturer'])->name('lecturer.profile');


});


require __DIR__.'/auth.php';
