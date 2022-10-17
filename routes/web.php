<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'get_all_student'])->name('student');
Route::get('/student/edit/{id}',[StudentController::class,'get_student_by_id'])->name('student.edit');
Route::post('/student/update/{id}',[StudentController::class,'edit']);
Route::get('/student/create',[StudentController::class,'create_student']);
Route::post('/student/addstudent',[StudentController::class,'add_student']);
Route::get('/student/delete/{id}',[StudentController::class,'delete_student']);


