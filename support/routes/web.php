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
// Route::any('/', function(){
//     return view('layout.master');
// })
// ->where(['any' => '.*']);
// Route::get('{any}', function () {
//     return view('layout.master');
// })
// ->where(['any' => '.*']);

// Route::post('/new-request', 'RequesController@insert');

// Route::get('/login', function () {
//     return view('home.master');
// });
// HỖ TRỢ ////
// Route::get('/chamcong', function () {
//     return view('pages.noibo.chamcong');
// });
    Route::get('/trangcanhan', function(){
        return view('pages.noibo.trangcanhan');
    });
// Route::get('/chamcong', 'controllerNoiBo@chamCong');

// Gửi yêu cầu mới //
// Route::get('/insert-request', 'RequesController@insert');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/new-request', function () {
    return view('pages/form/new-request');
});
Route::post('/inser-request', 'RequesController@insert');
// support
Route::get('/support/{a}', 'PagesController@Question');
// mission
// Route::get('/mission/{a}', 'PagesController@Question');

Route::prefix('internal')->group(function () {
    // Route::get('trangcanhan','controllerNoiBo@trangcanhan');
    Route::get('timekeeping','controllerNoiBo@chamcong');
    Route::get('calendar','controllerNoiBo@lichtruc');
    Route::get('permission-form','controllerNoiBo@xinphep');
    Route::get('punish','controllerNoiBo@ghiphat');
    Route::get('payroll','controllerNoiBo@banluong');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
