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

//===============================Tour
Route::get('tour','TourController@tour_view');

//===============================Destination
Route::get('destination','DestinationController@destination_view');

//===============================Single_tour_information
//Route::get('single_tour_information',InformationController@sinformation_view');

//===============================Single Tour Gallery
//Route::get('single_tour_gellery','GelleryController@gellery_view');

//===============================Faq
Route::get('faq','FaqController@faq_view');

//===============================Gallery
Route::get('gallery','GalleryController@gallery_view');

//===============================Blog
Route::get('blog','BlogController@blog_view');

//===============================Contact
Route::get('contact','ContactController@contact_view');
Route::post('contact', 'ContactController@save');

//===============================Admin
Route::get('admin','AdminController@admin_view');

//Route::get('category','CategoryController@category_view');


Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
