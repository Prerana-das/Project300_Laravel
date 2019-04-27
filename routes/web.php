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

//===============================Faq
Route::get('faq','FaqController@faq_view');

//===============================Gallery
Route::get('gallery','GalleryController@gallery_view');

//===============================Blog
Route::get('blog','BlogController@blog_view');

//===============================Contact
Route::get('contact/view','ContactController@contact_view');
Route::post('contact', 'ContactController@save');

//Single Tour
Route::get('information/','SingleTour\InformationController@index');
Route::get('plan','SingleTour\TourPlanController@index');
Route::get('map','SingleTour\TourMapController@index');
Route::get('single/gallery','SingleTour\TourGalleryController@index');
Route::get('review','SingleTour\TourReviewController@index');



//===============================Admin======

Route::group(['middleware' => 'auth'], function () {
//================ /Admin ===================

Route::group(['middleware' => ['admin']], function () {

Route::get('admin','AdminController@admin_view');

//Route::get('message','MessageController@message_view');
Route::get('message/view', 'Admin\MessageController@index');
Route::get('message/{id}','Admin\MessageController@del');


Route::get('category/view', 'Admin\CategoryController@index');
Route::get('category/add_category', 'Admin\CategoryController@add_category');
Route::post('category/save','Admin\CategoryController@save');
Route::get('category/edit_category/{id}','Admin\CategoryController@edit_category');
Route::post('category/edit','Admin\CategoryController@edit');
Route::get('category/{id}','Admin\CategoryController@del');

/////////Country
Route::get('country/view', 'Admin\CountryController@index');
Route::get('country/add_country', 'Admin\CountryController@add_country');
Route::post('country/save', 'Admin\CountryController@save');
Route::get('country/edit_country/{id}','Admin\CountryController@edit_country');
Route::post('country/edit','Admin\CountryController@edit');
Route::get('country/{id}','Admin\CountryController@del');

/////////City
Route::get('city/view', 'Admin\CityController@index');
Route::get('city/add_city', 'Admin\CityController@add_city');
Route::post('city/save', 'Admin\CityController@save');
Route::get('city/edit_city/{id}','Admin\CityController@edit_city');
Route::post('city/edit','Admin\CityController@edit');
Route::get('city/{id}','Admin\CityController@del');


Route::get('allTour/view', 'Admin\AllTourController@index');
Route::get('allTour/add_allTour', 'Admin\AllTourController@add_allTour');
Route::post('allTour/save', 'Admin\AllTourController@save');



Route::get('tourPlan/view', 'Admin\TourPlanController@index');
Route::get('tourPlan/add', 'Admin\TourPlanController@add_TourPlan');
Route::post('tourPlan/save', 'Admin\TourPlanController@save');

Route::get('booking/view', 'Admin\BookingController@index');
Route::post('booking', 'BookingController@save');


Route::get('user/view', 'Admin\UserListController@index');

  });
});





Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
