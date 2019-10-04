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



// router nhân viên -> chỉ nhân viên và admin  truy cập
    Route::group(['middleware'=> ['checkemployee','auth'] ],function(){

    // mission

    Route::get('/mission', function () {
        return view('pages/table/mission-accept');
    });

    Route::get('/mission/{a}', 'PagesController@Question');

    // noi bo
    Route::prefix('internal')->group(function () {
        Route::get('timekeeping','controllerNoiBo@chamCong');
        Route::get('calendar','controllerNoiBo@lichtruc');
        Route::get('permission-form','controllerNoiBo@xinphep');
        Route::get('punish','controllerNoiBo@ghiphat');
        Route::get('payroll','controllerNoiBo@banluong');
    });

    });
// Router admin -> chỉ admin mới có quyền truy cập
    Route::group(['middleware'=> ['checkAdmin','auth'] ],function(){
        Route::get('admin/user', 'UsersController@Viewusers');
        Route::get('admin/user/{id}', 'UsersController@ViewEditUser');

    });


Auth::routes();
Route::get('google/redirect', 'Auth\LoginController@redirectToProvider')->name('googleRedirect');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

