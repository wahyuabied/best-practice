<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Room extends Model
{
    protected $fillable = [
        'name','code',
    ];

    protected $table = 'rooms';

    public static function getRoom($id){
    	return DB::table('rooms')->where('id',$id)->get();
    }

    public function roomHasHotel()
    {
    	return $this->hasOne('App\HotelHasRoom', 'room_id', 'id');
    }
}
