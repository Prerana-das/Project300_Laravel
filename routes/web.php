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
Route::get('contact/view','ContactController@contact_view');
Route::post('contact', 'ContactController@save');

//===============================Admin
Route::get('admin','AdminController@admin_view');

//Route::get('category','CategoryController@category_view');

//Route::get('message','MessageController@message_view');
Route::get('message/view', 'Admin\MessageController@index');
Route::get('message/edit/{id}','Admin\MessageController@edit_message');
Route::get('message/{id}','Admin\MessageController@del');


Route::get('category/view', 'Admin\CategoryController@index');
Route::get('category/add_category', 'Admin\CategoryController@add_category');
Route::post('category/save','Admin\CategoryController@save');
Route::get('category/edit_category/{id}','Admin\CategoryController@edit_category');
Route::post('category/edit','Admin\CategoryController@edit');
Route::get('category/{id}','Admin\CategoryController@del');


Route::get('country/view', 'Admin\CountryController@index');
Route::get('city/view', 'Admin\CityController@index');
Route::get('allTour/view', 'Admin\AllTourController@index');
Route::get('tourPlan/view', 'Admin\TourPlanController@index');
Route::get('booking/view', 'Admin\BookingController@index');
Route::get('user/view', 'Admin\UserListController@index');

//Single Tour
Route::get('information','SingleTour\InformationController@index');
Route::get('plan','SingleTour\TourPlanController@index');
Route::get('map','SingleTour\TourMapController@index');
Route::get('single/gallery','SingleTour\TourGalleryController@index');
Route::get('review','SingleTour\TourReviewController@index');




Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
