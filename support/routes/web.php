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
Route::any('{any}', function () {
    return view('layout.master');
})
->where(['any' => '.*']);
// Route::get('/login', function () {
//     return view('home.master');
// });
//// HỖ TRỢ ////
// Gửi yêu cầu mới //
// Route::get('/insert-request', 'RequesController@insert');
Route::get('/insert-request', function () {
    echo 'abc' ;
});
Route::get('/SearchQuestion','SearchQuestion@init');
// Yêu cầu mới gửi //
Route::get('/request-new', function () {
    return view('pages/table/request-new');
});
// Đang xử lý //
Route::get('/handling', function () {
    return view('pages/table/request-new');
});
// Đã trả lời //
Route::get('/answered', function () {
    return view('pages/table/request-new');
});
// Đã xử lý xong //
Route::get('/done-handling', function () {
    return view('pages/table/request-new');
});
// Tra cứu câu hỏi //
Route::get('/search-question', function () {
    return view('pages/form/search-request');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
