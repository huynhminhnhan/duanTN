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
    // sinh vien rep cau hoi
    Route::post('rep/{id_user}/{id_question}','RequesController@RepReceive');

    // trang cá nhân
    Route::get('profile','Profile@information');
// router nhân viên -> chỉ nhân viên và admin  truy cập
    Route::group(['middleware'=> ['checkemployee','auth'] ],function(){

    // mission

    Route::get('/mission', function () {
        return view('pages/table/mission-accept');
    });

    Route::get('/mission/{a}', 'PagesController@QuestionEmployee');

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
    Route::get('questionEmployee/{name}', 'PagesController@RequestDetail');
    // tiep nhan cau hoi
    Route::get('receive/{id_admin}/{id_question}','RequesController@Receive');
    // phan hoi khách hàng
    Route::post('repEmployee/{id_user}/{id_question}','RequesController@RepReceive');
    // đóng câu hỏi
    Route::get('/done/{id_question}','RequesController@done');
    });
// Router admin -> chỉ admin mới có quyền truy cậpp
    Route::group(['middleware'=> ['checkAdmin'] ],function(){
        Route::get('admin/', 'UsersController@homeAdmin');
        Route::get('admin/user', 'UsersController@Viewusers');
        Route::get('admin/user/{id_account}', 'UsersController@ViewEditUser');
        Route::post('admin/user', 'UsersController@EditUser');
        // phòng ban 
        Route::get('admin/Departments/', 'Departments@showDepartments');
        Route::post('admin/addDepartment', 'Departments@addDepartments');
       
        // sentmailDepart
        Route::get('internal/sendNotification', 'Sendmail@viewSendMailDepartments');
        Route::post('/sentMailDepartment', 'Sendmail@SendMailDepartments');

    });
   

Auth::routes();
Route::get('google/redirect', 'Auth\LoginController@redirectToProvider')->name('googleRedirect');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

