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
});

Route::get('/hotel','Hotel\HotelController@index')->name('hotel.index');
Route::get('/hotel-search/{p}','Hotel\HotelController@searchHotel')->name('hotel.search');
Route::get('/hotel-detail/{p}','Hotel\HotelController@getDetail')->name('hotel.detail');
Route::post('/hotel-create','Hotel\HotelController@createHotel')->name('hotel.create');
Route::post('/hotel-update','Hotel\HotelController@updateHotel')->name('hotel.update');
Route::post('/hotel-delete/{id}','Hotel\HotelController@deleteHotel')->name('hotel.delete');
//room
Route::post('/room-create','Room\RoomController@createRoom')->name('room.create');
Route::post('/room-update','Room\RoomController@updateRoom')->name('room.update');
Route::post('/room-delete/{$id}','Room\RoomController@deleteRoom')->name('room.delete');
