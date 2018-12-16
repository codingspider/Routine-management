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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});



// Route::resource('/student', 'StudentController'); 

Route::get('/student', 'AddStudentController@index');
Route::get('/student/create', 'AddStudentController@create');
Route::post('/student/create', 'AddStudentController@store');
Route::get('/student/all', 'AllStudentController@index');

Route::get('student_delete/{id}','AddStudentController@delete'); 
Route::get('student_profile/{id}','AllStudentController@profile'); 
Route::get('student_edit/{id}','AllStudentController@edit'); 
// Route::post('update_student/{id}','AllStudentController@update');

Route::post('/update_student/{id}', 'AllStudentController@update'); 


//Routine routes

Route::get('/routine/view', 'AddRoutineController@index'); 
Route::get('/routine/create', 'AddRoutineController@create');
Route::post('/routine/create', 'AddRoutineController@store');
Route::get('/routine/my/view', 'AddRoutineController@myroutine');





//Semester routs

Route::get('/semester/create', 'SemesterController@create');
Route::post('/semester/create', 'SemesterController@store');


//Teacher routes

Route::get('/teacher/create', 'TeacherController@create');
Route::post('/teacher/create', 'TeacherController@store');


//Subject routes

Route::get('/subject/create', 'SubjectController@create');
Route::post('/subject/create', 'SubjectController@store');


