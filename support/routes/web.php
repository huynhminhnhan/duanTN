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

Route::any('/', function () {
    return view('layout.master');
})
->where(['any' => '.*']);
Route::get('{any}', function () {
    return view('layout.master');
})
->where(['any' => '.*']);
// Route::get('/login', function () {
//     return view('layout.master');
// });
//// HỖ TRỢ ////
// Gửi yêu cầu mới //


Auth::routes();
Route::post('/login', 'HomeController@index');
//Route::get('/login', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');
