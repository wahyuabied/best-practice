<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
     protected $fillable = [
        'room_id','image',
    ];

    public function imageRoom(){
        return $this->belongsTo('\App\Model\Room','id','room_id');
    }
}
