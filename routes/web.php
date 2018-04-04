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

Route::group(['prefix' => Auth::routes()], function(){
	Route::get('/home', 'Dashboard\HomeController@index')->name('home');
	Route::get('/artikel', 'Artikel\ArtikelController@index')->name('artikel.index');
	Route::post('/artikel-create', 'Artikel\ArtikelController@createArtikel')->name('artikel.create');
	Route::get('/hotel', 'Hotel\HotelController@index')->name('hotel.index');
	Route::get('detail-hotel/{id}', 'Hotel\HotelController@getDetailHotel')->name('hotel.detail');
	Route::post('/hotel-create', 'Hotel\HotelController@createHotel')->name('hotel.create');
	Route::get('detail-room/{id}', 'Hotel\HotelController@getDetailRoom')->name('hotel.room.detail');
	Route::resource('todo', 'TodoController');


});
