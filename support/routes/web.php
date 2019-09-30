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
// Route::get('/chamcong', 'controllerNoiBo@chamCong');

// Gửi yêu cầu mới //
// Route::get('/insert-request', 'RequesController@insert');

Route::get('/', 'HomeController@index')->middleware('auth');
Route::get('/new-request','RequesController@view');
// function () {

//     return view('pages/form/new-request');
    
// })->middleware('auth');
Route::post('/inser-request', 'RequesController@insert');
// support
Route::get('/support/{a}', 'PagesController@Question');

Route::get('/user', function () {
    return view('pages/table/user');
});

Route::get('/edit', function () {
    return view('pages/table/edit-user');
});





Auth::routes();
Route::get('google/redirect', 'Auth\LoginController@redirectToProvider')->name('googleRedirect');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mission', function () {
    return view('pages/table/mission-accept');
});



// mission
Route::get('/mission/{a}', 'PagesController@Question');
// noi bo
Route::prefix('internal')->group(function () {
    Route::get('timekeeping','controllerNoiBo@chamCong');
    Route::get('calendar','controllerNoiBo@lichtruc');
    Route::get('permission-form','controllerNoiBo@xinphep');
    Route::get('punish','controllerNoiBo@ghiphat');
    Route::get('payroll','controllerNoiBo@banluong');
});
