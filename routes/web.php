<?php

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



// dashboard
Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/', function () {   return view('dashboard.index'); })->name('dashboard.home');

    // Manage student
    Route::resource('/student',\App\Http\Controllers\admin\StudentController::class)->parameters(['student'=>'id']);

    //Manage Teacher
    Route::resource('/teacher',\App\Http\Controllers\admin\TeacherController::class)->parameters(['teacher'=>'id']);

    // Manage College
    Route::resource('/college',\App\Http\Controllers\admin\CollegeController::class)->parameters(['college'=>'id']);

    // Manage Major
    Route::resource('/major',\App\Http\Controllers\admin\MajorController::class)->parameters(['major'=>'id']);

    // Manage Course
    Route::resource('/course',\App\Http\Controllers\admin\CourseController::class)->parameters(['course'=>'id']);

    // Manage Time
    Route::resource('/time',\App\Http\Controllers\admin\TimeController::class)->parameters(['time'=>'id']);

    // Manage Class
    Route::resource('/class',\App\Http\Controllers\admin\ClassController::class)->parameters(['class'=>'id']);




});
