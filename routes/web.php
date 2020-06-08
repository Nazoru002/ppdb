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

// Routing Frontend
Route::get('/', 'BaseController@index');
Route::get('/rpl', 'BaseController@rpl');
Route::get('/tkj', 'BaseController@tkj');
Route::get('/printTanda', 'Frontend\PaymentShowController@viewPrint');
Route::get('/printdata', 'Frontend\PaymentShowController@print');
Route::get('/printend', 'Frontend\AlreadyController@print');
Route::get('/visi_misi', 'BaseController@visimisi');

// Auth Frontend
Route::post('/cLogin', 'Frontend\UsersController@login')->name('login.index');
Route::post('/cRegister', 'Frontend\UsersController@register');

// Auth Backend *Admin
Route::get('/backend', 'Admin\UsersController@index');
Route::post('/cLoginA', 'Admin\UsersController@login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Routing
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => ['role:Admin']], function () {
            Route::get('/', 'Admin\MainController@index')->name('admin.index');
            Route::resource('dataSiswa', 'Admin\DataController');
        });
    });
});

// Siswa Routing
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'siswa'], function () {
        Route::group(['middleware' => ['role:Siswa']], function () {
            Route::get('/', 'Frontend\MainController@index')->name('siswa.index');
            Route::post('dependent-dropdown', 'Frontend\BerkasController@city')->name('dependent.city');
            Route::resource('data', 'Frontend\DataSiswaController');
            Route::resource('upload', 'Frontend\BerkasController');
            Route::resource('transaction', 'Frontend\TransaksiController');
            Route::resource('payment', 'Frontend\PaymentShowController');
            Route::resource('already', 'Frontend\AlreadyController');
        });
    });
});

