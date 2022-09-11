<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
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
Route::post('/teacher/login', [TeacherAuthController::class, 'loginCheck'])->name('teacher.loginCheck');
Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');


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

});
