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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('mercari/top', 'Admin\MercariController@add' );
    Route::get('mercari/mypage', 'Admin\MercariController@own');
    Route::get('mercari/logout', 'Admin\MercariController@logout');
    Route::get('mercari/sell', 'Admin\MercariController@sell');
    Route::post('mercari/sell', 'Admin\MercariController@create');
    Route::get('mercari/detail', 'Admin\MercariController@detail');
    Route::get('mercari/edit', 'Admin\MercariController@edit');
    Route::post('mercari/edit', 'Admin\MercariController@update');
    Route::get('mercari/delete', 'Admin\MercariController@delete');
    Route::get('mercari/index', 'Admin\MercariController@index');
    Route::get('mercari/refine', 'Admin\MercariController@refine');
    Route::get('mercari/serch', 'Admin\MercariController@serch');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
