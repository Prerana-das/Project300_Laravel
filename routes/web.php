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

Route::get('/','mainController@index'); //Run via controller (c.Loc:app>http>controllers)

Route::get('/','mainController@index2');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
