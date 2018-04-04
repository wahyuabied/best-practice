<?php

namespace App\Http\Controllers\Hotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Hotel;
use App\Model\Room;

class HotelController extends Controller
{
    public function index(){
    	$data = Hotel::allHotel();
    	// return view(/*hotel.index*/,['data'=> $data]);
    }

     public function searchHotel($p){
    	$hotel = Hotel::getHotel($p);
        $image = Hotel::getImage($data[0]->id);
        
        return $image;
    	// return view(/*hotel.index*/,['data'=> $data]);
    }

    public function getDetail($id){
    	$hotel = Hotel::getHotelFromId($id);
        $room = Room::getRoomHotel($id);
        $data=[
            'hotel'=>$hotel,
            'room'=>$room
        ];
        return $data;
    	// return view(/*hotel.index*/,['data'=> $data]);
    }

    public function createHotel(Request $request){
        Hotel::create($request->all());
        $this->createImageHotel($request);
    	// return back();
    }

    public function updateHotel(Request $request){
    	$hotel = Hotel::getHotelFromId($request->id);
    	$hotel->update($request->all());
    	// return back();
    }

    public function deleteHotel($id){
    	Hotel::getHotelFromId($id)->delete();
    	// return back();
    }

    public function createImageHotel(Request $request){
        $request->request->add('hotel_id',$request->id);
        HotelImage::create($request->all());
    }
}
