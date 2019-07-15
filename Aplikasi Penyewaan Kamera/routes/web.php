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


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/admin'], function(){
	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get('/kamera', 'KameraController@index')->name('kamera');
	Route::get('/kamera/create', 'KameraController@create')->name('kamera.create');
	Route::post('/kamera/create', 'KameraController@store')->name('kamera.store');
	Route::get('/kamera/edit/{id}', 'KameraController@edit')->name('kamera.edit');
	Route::patch('/kamera/edit/{id}', 'KameraController@update')->name('kamera.update');
	Route::get('/kamera/destroy/{id}', 'KameraController@destroy')->name('kamera.destroy');

	Route::get('/customer', 'CustomerController@index')->name('customer');
	Route::get('/customer/konfirmasi/{id}', 'CustomerController@konfirmasi')->name('customer.konfirmasi');
	Route::get('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');

});

Route::get('/', 'FrontendController@index')->name('user.index');
Route::get('/kamera', 'FrontendController@kamera')->name('user.kamera');
Route::get('/pesan/{id}', 'FrontendController@pesan')->name('user.pesan');
Route::post('/pesan', 'FrontendController@pesansubmit')->name('user.pesan.submit');