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

Auth::routes();
Auth::routes(['register' => false]);
Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/{locale?}', 'DashboardController@locale')->name('locale');
Route::resource('company', 'CompanyController');
Route::resource('employee', 'EmployeeController');
