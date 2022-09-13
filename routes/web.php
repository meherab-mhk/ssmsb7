<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminCourseController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/all-courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/login-register', [HomeController::class, 'auth'])->name('login-register');
Route::get('/course-details', [HomeController::class, 'details'])->name('course-details');

Route::get('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'loginCheck'])->name('teacher.login');
Route::post('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');

Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');

Route::get('/course/add', [CourseController::class, 'add'])->name('course.add');
Route::get('/course/manage', [CourseController::class, 'manage'])->name('course.manage');
Route::post('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::get('/course/detail/{id}', [CourseController::class, 'detail'])->name('course.detail');
Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/teacher/add', [TeacherController::class, 'add'])->name('teacher.add');
    Route::get('/teacher/manage', [TeacherController::class, 'manage'])->name('teacher.manage');
    Route::post('/teacher/new', [TeacherController::class, 'create'])->name('teacher.new');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');

    Route::get('/admin/manage-course', [AdminCourseController::class, 'manageCourse'])->name('admin.manage-course');
    Route::get('/admin/course-detail/{id}', [AdminCourseController::class, 'courseDetail'])->name('admin.course-detail');
    Route::get('/admin/update-course-status/{id}', [AdminCourseController::class, 'updateStatus'])->name('admin.update-course-status');
    Route::get('/admin/offer-course', [AdminCourseController::class, 'offerCourse'])->name('admin.offer-course');
    Route::post('/admin/offer-update', [AdminCourseController::class, 'offerUpdate'])->name('admin.offer-update');

});
