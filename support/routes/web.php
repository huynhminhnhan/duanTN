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
//// HỖ TRỢ ////
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

<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mission', function () {
    return view('pages/table/mission-accept');
});

Route::get('/search-question', function () {
    return view('pages/form/search-request');
=======
Route::prefix('mission')->group(function () {
    Route::get('must-accept', function () {
        return view('pages/table/');
    });
>>>>>>> 61818767f4a091fb2f903b6f7b684ff3b1a21e89
});

Route::get('/view-payroll', function () {
    return view('pages/table/payroll');
});
