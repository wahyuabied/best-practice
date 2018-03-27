<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Artikel extends Model
{
    protected $fillable = [
        'title','content','user_id',
    ];

    public static function getAllArtikel(){
    	return DB::table('artikels')->where('user_id',auth()->user()->id)->get();
    }

    public function user()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
