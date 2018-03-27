<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class HotelHasRoom extends Model
{
    protected $fillable = [
        'hotel_id','room_id',
    ];

    protected $table = 'hotel_has_rooms';

    public static function getDetailHotel($id){

            $hasil = HotelHasRoom::with(['hotel','room'])->select('hotel_id','h.name as NamaHotel','h.address as AlamatHotel','h.email as EmailHotel','room_id','r.name as RoomName','r.code as RoomCode')->join('hotels as h','h.id','=','hotel_id')->join('rooms as r','r.id','=','room_id')->where('hotel_id',$id)->get();
           
            return $hasil;
    }

    public function hotel()
    {
    	return $this->belongsTo('App\Hotel');
    }

    public function room()
    {
    	return $this->belongsTo('App\Room');
    }
}
