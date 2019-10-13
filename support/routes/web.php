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

    Route::get('/', 'HomeController@index')->middleware('auth');
    Route::get('/new-request','RequesController@view');
    Route::get('/search-question','RequesController@search');
    Route::post('/search-question/name', 'RequesController@getSearchAjax')->name('search');
    // cho sinh viên
    Route::get('/support/{a}', 'PagesController@Question');
    Route::post('/inser-request', 'RequesController@insert');
    // chi tiet cau hỏi
    Route::get('question/{name}', 'PagesController@RequestDetail');

    // trang cá nhân
    Route::get('profile','Profile@index');
    Route::get('profile/edit','Profile@editProfile');
    // insert du lieu vao profile
    Route::post('/profile/{user_id}', 'Profile@update');


// router nhân viên -> chỉ nhân viên và admin  truy cập
    Route::group(['middleware'=> ['checkemployee','auth'] ],function(){

    // mission

    Route::get('/mission', function () {
        return view('pages/table/mission-accept');
    });

    Route::get('/mission/{a}', 'PagesController@Question');

    // Trang chi tiết
    // Route::get('/question/{a}-{id}', 'PagesController@Question');
    // Route::get('/chitietcauhoi', 'PagesController@Question');
    // noi bo
    Route::prefix('internal')->group(function () {
        Route::get('timekeeping','controllerNoiBo@chamCong');
        Route::get('calendar','controllerNoiBo@lichtruc');
        Route::get('permission-form','controllerNoiBo@xinphep');
        Route::get('punish','controllerNoiBo@ghiphat');
        Route::get('payroll','controllerNoiBo@banluong');
    });
    // chi tiet cau hỏi
    // Route::get('question/{name}', 'PagesController@RequestDetail');

    });
// Router admin -> chỉ admin mới có quyền truy cập
    Route::group(['middleware'=> ['checkAdmin','auth'] ],function(){
        Route::get('admin/user', 'UsersController@Viewusers');
        Route::get('admin/user/{id}', 'UsersController@ViewEditUser');

    });


Auth::routes();
Route::get('google/redirect', 'Auth\LoginController@redirectToProvider')->name('googleRedirect');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

