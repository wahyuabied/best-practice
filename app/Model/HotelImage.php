<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    protected $fillable = [
        'hotel_id','image',
    ];

    public function imageHotel(){
        return $this->belongsTo('\App\Model\Hotel','id','hotel_id');
    }
}
