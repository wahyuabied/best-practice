<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\hotelImage;

class Hotel extends Model
{
    protected $fillable = [
        'name','code', 'star', 'rating','basic_price','address','latitude','longitude','country_id','city_id',
    ];

    protected $table = 'hotels';

    public function room(){
    	return $this->belongsTo('\App\Model\Room','hotel_id','id');
    }

    public function hotelImage(){
        return $this->hasMany('\App\Model\hotelImage','hotel_id','id');
    }

    public static function allHotel(){
    	return Hotel::get();
    }

    public static function getHotel($p){
    	 $hotel = Hotel::where('name',$p)->get();
         return $hotel;
    }

    public static function getHotelFromId($id){
    	return Hotel::where('id',$id)->get();
    }

    public static function getImage($id){
        return \App\Model\hotelImage::where('hotel_id',$id);
    }
}
