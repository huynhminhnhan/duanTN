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


Route::get('/', 'HomeController@index');
Route::get('/new-request', function () {
    return view('pages/form/new-request');
});
Route::post('/inser-request', 'RequesController@insert');
// support
Route::get('/support/{a}', 'PagesController@Question');
// mission
// Route::get('/mission/{a}', 'PagesController@Question');

Route::prefix('internal')->group(function () {
    Route::get('timekeeping','controllerNoiBo@chamCong');
    Route::get('calendar','controllerNoiBo@lichtruc');
    Route::get('permission-form','controllerNoiBo@xinphep');
    Route::get('punish','controllerNoiBo@ghiphat');
    Route::get('payroll','controllerNoiBo@banluong');
});

Auth::routes();
Route::post('/login', 'HomeController@index');
