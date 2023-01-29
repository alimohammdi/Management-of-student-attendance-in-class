<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Auth::routes();
// dashboard

Route::group(['middleware' => ['auth'],'prefix'=>'dashboard'],function(){
    Route::get('/', function () {   return view('dashboard.index'); })->name('dashboard.home');

    // Manage student
    Route::resource('/student',\App\Http\Controllers\admin\StudentController::class)->parameters(['student'=>'id']);
    Route::get('/add-role/{id}',[\App\Http\Controllers\admin\StudentController::class,'addRolePage'])->name('student.addRole');
    Route::post('/add-Role-user/{id}',[\App\Http\Controllers\admin\StudentController::class,'addRoleToUser'])->name('add.role.store');

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


    // Manage Units
    Route::resource('/addUnit',\App\Http\Controllers\admin\AddunitController::class)->parameters(['addUnit'=>'id']);
    Route::get('/select-college',[\App\Http\Controllers\admin\AddunitController::class,'selectCollege'])->name('select.college.unit');

    // Select Unit
   Route::resource('/selectUnit',\App\Http\Controllers\admin\SelectUnitController::class)->parameters(['selectUnit'=>'id']);
    Route::get('/selectCollege',[\App\Http\Controllers\admin\SelectUnitController::class,'selectcollege'])->name('selectCollege');

    // Manage Permission and Role
    Route::resource('/permission',\App\Http\Controllers\admin\PermissionController::class)->parameters(['permission'=>'id']);
    Route::resource('/role',\App\Http\Controllers\admin\RoleController::class)->parameters(['role'=>'id']);
});

// عملیات های اصلی حضور و غیاب

Route::prefix('/')->group( function(){
    Route::resource('/rollcall',\App\Http\Controllers\admin\RollcallController::class)->parameters(['rollcall'=>'id']);
 });




//Auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class , 'logout'])->name('logout');
Route::post('user_login', [\App\Http\Controllers\Auth\LoginController::class , 'user_login'])->name('user.login');
