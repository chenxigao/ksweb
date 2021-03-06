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

Route::get('/', 'AppStateController@index')->name('index');
Route::get('/play', 'AppStateController@update')->name('play.update');
Route::get('signup', 'RegisterController@create')->name('signup');
Route::post('register', 'RegisterController@store')->name('register');


