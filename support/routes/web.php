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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/new-request', function () {
    return view('pages/form/new-request');
});
Route::post('/inser-request', 'RequesController@insert');

Route::get('/support/{a}', 'PagesController@Question');
// Nội Bộ
Route::prefix('internal')->group(function () {
    Route::get('timekeeping', 'controllerNoiBo@chamCong');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
