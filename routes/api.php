<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hotel-search/{p}','Hotel\HotelController@searchHotel');
Route::get('/hotel-detail/{p}','Hotel\HotelController@getDetail');
Route::post('/hotel-create','Hotel\HotelController@createHotel');
Route::post('/hotel-update','Hotel\HotelController@updateHotel');
Route::post('/hotel-delete/{id}','Hotel\HotelController@deleteHotel');
//room
Route::post('/room-create','Room\RoomController@createRoom');
Route::post('/room-update','Room\RoomController@updateRoom');
Route::post('/room-delete/{$id}','Room\RoomController@deleteRoom');
