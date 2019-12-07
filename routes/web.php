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

Route::get('/','DepartmentController@index')->name('index');

Route::name('department.')->prefix('department')->group(function(){
    
    Route::get('/create','DepartmentController@create')->name('create');
    Route::post('/store','DepartmentController@store')->name('store');
    Route::get('/{dep_id}/showdetail','DepartmentController@showDetail')->name('showdetail');

});

Route::name('employee.')->prefix('employee')->group(function(){
    Route::get('/create','EmployeeController@create')->name('create');
    Route::post('/store','EmployeeController@store')->name('store');
});