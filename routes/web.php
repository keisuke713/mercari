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
    Route::get('mercari/mypage', 'Admin\MercariController@own')->middleware('auth');
    Route::get('mercari/logout', 'Admin\MercariController@logout');
    Route::get('mercari/sell', 'Admin\MercariController@sell')->middleware('auth');
    Route::post('mercari/sell', 'Admin\MercariController@create');
    Route::get('mercari/detail', 'Admin\MercariController@detail')->middleware('auth');
    Route::get('mercari/edit', 'Admin\MercariController@edit');
    Route::post('mercari/edit', 'Admin\MercariController@update');
    Route::get('mercari/delete', 'Admin\MercariController@delete');
    Route::get('mercari/index', 'Admin\MercariController@index')->middleware('auth');
    Route::get('mercari/refine', 'Admin\MercariController@refine')->middleware('auth');
    Route::get('mercari/serch', 'Admin\MercariController@serch')->middleware('auth');
    Route::get('mercari/like', 'Admin\MercariController@like')->middleware('auth');
    Route::get('mercari/release', 'Admin\MercariController@release')->middleware('auth');
    Route::get('mercari/comment', 'Admin\MercariController@comment')->middleware('auth');
    Route::post('mercari/comment', 'Admin\MercariController@contribute')->middleware('auth');
    Route::get('mercari/list', 'Admin\MercariController@list')->middleware('auth');
    Route::get('mercari/question', 'Admin\MercariController@question')->middleware('auth');
    Route::get('mercari/answer', 'Admin\MercariController@answer')->middleware('auth');
    Route::post('mercari/answer', 'Admin\MercariController@solve');
});

Route::post('/charge', 'ChargeController@charge');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
