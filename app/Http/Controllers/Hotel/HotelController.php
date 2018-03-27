<?php

namespace App\Http\Controllers\Hotel;

use Illuminate\Http\Request;
use App\Hotel;
use App\HotelHasRoom;
use App\Room;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function index(){
    	return view('hotel.index',['data'=>Hotel::getAllHotel()]);
    }

    public function createHotel(Request $request){
    	$hotel = Hotel::create($request->all());
        dd($hotel->id+1);
    	return redirect()->back();
    }

    public function getDetailHotel($id){
        $data = HotelHasRoom::getDetailHotel($id);
        //return view('...',$data);
    }

    public function getDetailRoom($id){
        $data = Room::getRoom($id);
        //return view('...',$data);
    }

    public function createRoom(Request $request){
        $room = Room::create($request->all());
        $request->request->add(['room_id'=>($room->id+1)]);
        HotelHasRoom::create($request->all());
        return redirect()->back();
    }
}
