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
  //ブログ
    Route::get('blog/create', 'Admin\BlogController@add')->middleware('auth');
    Route::post('blog/create', 'Admin\BlogController@create')->middleware('auth');
    Route::get('blog/edit', 'Admin\BlogController@edit')->middleware('auth');
    Route::post('blog/edit', 'Admin\BlogController@update')->middleware('auth');
    Route::get('blog/index', 'Admin\BlogController@index')->middleware('auth');
    Route::get('blog/delete', 'Admin\BlogController@delete')->middleware('auth');
  //データ
    Route::get('date/create', 'Admin\DateController@add')->middleware('auth');
    Route::post('date/create', 'Admin\DateControlle@create')->middleware('auth');
    Route::get('date/edit', 'Admin\DateControlle@edit')->middleware('auth');
    Route::post('date/edit', 'Admin\DateControlle@update')->middleware('auth');
    Route::get('date/index', 'Admin\DateControlle@index')->middleware('auth');
  //問い合わせ
    Route::get('inquiy/create', 'Admin\InquiyController@add')->middleware('auth');
    Route::post('inquiy/create', 'Admin\InquiyController@create')->middleware('auth');
    Route::get('inquiy/edit', 'Admin\InquiyController@edit')->middleware('auth');
    Route::post('inquiy/edit', 'Admin\InquiyController@update')->middleware('auth');
    Route::get('inquiy/index', 'Admin\InquiyController@index')->middleware('auth');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
