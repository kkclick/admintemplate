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

Route::resource('employees', 'EmployeeController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('leaveClaims', 'LeaveClaimController');

Route::resource('companies', 'CompanyController');