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
Route::any('{all}', function () {
    return view('welcome');
})
->where(['all' => '.*']);
// Route::get('/', function () {
//     return view('welcome');
// });
//// HỖ TRỢ ////
// Gửi yêu cầu mới //
Route::get('/new-request', function () {
    return view('pages/form/new-request');
});
Route::get('/new-request', function () {
    return view('pages/form/new-request');
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
