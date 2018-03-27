<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Hotel extends Model
{
    protected $fillable = [
        'name','address','email',
    ];

    protected $table = 'hotels';

    public static function getAllHotel(){
    	return DB::table('hotels')->get();
    }

    public function hotelHasRoom()
    {
    	return $this->hasMany('App\HotelHasRoom', 'hotel_id', 'id');
    }
}
