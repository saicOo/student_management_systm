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
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');
// Branch Route
Route::get('branch', 'BranchController@index')->name('branch.index');
Route::get('branch/create', 'BranchController@create')->name('branch.create');
Route::post('branch/store', 'BranchController@store')->name('branch.store');
Route::get('branch/edit/{id}','BranchController@edit')->name('branch.edit');
Route::post('branch/update/{id}','BranchController@update')->name('branch.update');
Route::get('branch/destroy/{id}','BranchController@destroy')->name('branch.destroy');
// Course Route
Route::get('course', 'CourseController@index')->name('course.index');
Route::get('course/create', 'CourseController@create')->name('course.create');
Route::post('course/store', 'CourseController@store')->name('course.store');
Route::get('course/edit/{id}','CourseController@edit')->name('course.edit');
Route::post('course/update/{id}','CourseController@update')->name('course.update');
Route::get('course/destroy/{id}','CourseController@destroy')->name('course.destroy');
// Student Route
Route::get('student', 'StudentController@index')->name('student.index');
Route::get('student/create', 'StudentController@create')->name('student.create');
Route::post('student/store', 'StudentController@store')->name('student.store');
Route::get('student/edit/{id}','StudentController@edit')->name('student.edit');
Route::post('student/update/{id}','StudentController@update')->name('student.update');
Route::get('student/destroy/{id}','StudentController@destroy')->name('student.destroy');
Route::get('student/show/{id}','StudentController@show')->name('student.show');
Route::post('student/courses', 'StudentController@getcours')->name('courses.get');
Route::post('student/teacher', 'StudentController@getTeacher')->name('teacher.get');
// teacher Route
Route::get('teacher', 'teacherController@index')->name('teacher.index');
Route::get('teacher/create', 'teacherController@create')->name('teacher.create');
Route::post('teacher/store', 'teacherController@store')->name('teacher.store');
Route::get('teacher/edit/{id}','teacherController@edit')->name('teacher.edit');
Route::post('teacher/update/{id}','teacherController@update')->name('teacher.update');
Route::get('teacher/destroy/{id}','teacherController@destroy')->name('teacher.destroy');
Route::get('teacher/show/{id}','teacherController@show')->name('teacher.show');
Route::post('teacher/courses', 'teacherController@getcours')->name('courses.get');
