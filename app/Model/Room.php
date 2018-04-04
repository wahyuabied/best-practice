<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'hotel_id','name','code', 'basic_price', 'description','available',
    ];

    protected $table = 'rooms';

    public function room(){
    	return $this->hasMany('\App\Model\Hotel','id','hotel_id');
    }

    public function roomImage(){
        return $this->hasMany('\App\Model\RoomImage','id','room_id');
    }

    public static function getRoomHotel($hotel_id){
    	return Room::where('hotel_id',$hotel_id)->get();
    }

    public static function getRoomFromId($id){
    	return Room::where('id',$id)->get();
    }
}
