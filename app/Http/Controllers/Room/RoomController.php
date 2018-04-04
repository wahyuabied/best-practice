<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;
use App\Model\RoomImage;

class RoomController extends Controller
{
    public function createRoom(Request $request){
    	Room::create($request->all());
    	$this->createImageRoom($request);
    }

    public function updateRoom(Request $request){
    	$hotel = Room::getRoomFromId($request->id);
    	$hotel->update($request->all());
    }

    public function deleteRoom($id){
    	Hotel::getHotelFromId($id)->delete();
    }

    public function createImageRoom(Request $request){
    	$request->request->add('room_id',$request->id);
    	RoomImage::create($request->all());
    }
}
