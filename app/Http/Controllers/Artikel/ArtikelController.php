<?php

namespace App\Http\Controllers\Artikel;

use Illuminate\Http\Request;
use App\Artikel;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function index(){
    	
    	return view('artikel.index',['data'=>Artikel::getAllArtikel()]);
    }

    public function createArtikel(Request $request){
    	Artikel::create($request->all());
    	return redirect()->back();
    }

}
