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

Route::get('/', function () {
    return view('login');
});
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('userdashboard', 'AuthController@userdashboard');
Route::get('logout', 'AuthController@logout');

Route::get('employee_verification/{id}','EmployeeVerificationController@employee_verify')->name('employee_verify');
//Route::get('employee_export/{id}','EmployeeVerificationController@employee_export')->name('employee_export');


Route::post('post-verify', 'EmployeeVerificationController@post_verify');

Route::get('export/{id}', 'ImportExportController@export')->name('export');
Route::get('importExportView', 'ImportExportController@importExportView');
Route::post('import', 'ImportExportController@import')->name('import');
