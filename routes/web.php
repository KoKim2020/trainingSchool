<?php

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

Route::get('/','FrontendController@index')->name('frontend.index') ;



Route::get('student_register','FrontendController@studentRegister')->name('frontend.student.register') ;

Route::get('frontendcourse','FrontendController@frontendcourse')->name('frontend.course') ;
Route::get('csr','FrontendController@csr')->name('frontend.csr') ;




Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


Route::resource('roles','RoleController')->middleware('role:Admin');

Route::resource('students','StudentController');
Route::resource('mentors','MentorController');
Route::resource('courses','CourseController')->middleware('role:Admin');
Route::resource('batches','BatchController')->middleware('role:Admin');
Auth::routes();
Route::resource('mentors','MentorController')->middleware('role:Admin');
Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('subjects','SubjectController')->middleware('auth');

Route::group(['middleware' => ['auth']], function()
{
// Route::resource('students','StudentController');

Route::resource('subjects','SubjectController');

Route::post('getBatchesByCourse','BatchController@getBatchesByCourse')->name('courses.batches');


});
