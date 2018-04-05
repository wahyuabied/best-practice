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
    	return response()->json([
            'status' => 'ok',
            'data'=>$data
        ], 200);
    }

     public function searchHotel($p){
    	$hotel = Hotel::getHotel($p);
        $image = Hotel::getImage($data);

        return response()->json([
            'status' => 'ok',
            'data'=>$data
        ], 200);
    }

    public function getDetail($id){
    	$hotel = Hotel::getHotelFromId($id);
        $room = Room::getRoomHotel($id);
        $data=[
            'hotel'=>$hotel,
            'room'=>$room
        ];
        return response()->json([
            'status' => 'ok',
            'data'=>$data
        ], 200);
    }

    public function createHotel(Request $request){
        $hotel=Hotel::create($request->all());
        $image=$this->createImageHotel($request);
        if((!$hotel->save())&&(!$image->save())) {
            throw new HttpException(500);
        }
            return response()->json([
                'status' => 'ok',
                'data'=>$data
            ], 200);    
        
    	
    }

    public function updateHotel(Request $request){
    	$hotel = Hotel::getHotelFromId($request->id);
    	$hotel->update($request->all());
        return response()->json([
            'status' => 'ok',
        ], 200);
    }

    public function deleteHotel($id){
    	Hotel::getHotelFromId($id)->delete();
    	return response()->json([
            'status' => 'ok',
        ], 200);
    }

    public function createImageHotel(Request $request){
        $request->request->add('hotel_id',$request->id);
        $image = HotelImage::create($request->all());
        return response()->json([
            'status' => 'ok',
            'data'=>$image
        ], 200);
    }
}
