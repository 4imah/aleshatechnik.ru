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
Route::get('/', 'MainController@index');
Route::get('/send/', 'MainController@send');
Route::get('/services/', 'PriceController@services');
Route::get('/services/{service}', 'PriceController@service');
Route::get('/services/{service}/send/', 'PriceController@send');

Route::get('/contacts/', 'ContactsController@contacts');
Route::get('/contacts/send/', 'ContactsController@send');

Route::get('/reviews/', 'ReviewsController@viewReviews');


Route::get('/admin/', 'Admin\AdminController@main');

Route::get('/admin/services/{service}', 'Admin\ServicesController@services');
Route::get('/admin/services/{service}/add', 'Admin\ServicesController@add');
Route::get('/admin/services/{service}/{del}', 'Admin\ServicesController@delete');
Route::get('/admin/services/{service}/edite/{edit}', 'Admin\ServicesController@edit');

Route::get('/admin/contacts/', 'Admin\ContactsController@contacts');
Route::get('/admin/contacts/1', 'Admin\ContactsController@edit');

Route::get('/admin/reviews/', 'Admin\ReviewsController@viewReviews');
Route::get('/admin/reviews/{del}', 'Admin\ReviewsController@deleteReviews');

Route::get('/test/about', 'TestController@about');
Route::get('/test/contact', 'TestController@contact');
Route::get('/test/index', 'TestController@index');
Route::get('/test/service', 'TestController@service');
Route::get('/test/article-page', 'TestController@articlePage');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
