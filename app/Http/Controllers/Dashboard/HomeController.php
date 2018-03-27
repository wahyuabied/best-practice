<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',['data' => $this->getNameAtrribute()]);
    }

    public function getNameAtrribute(){
    	return $this->hasLastName()? $this->getFullName() : $this->getShortName();
    }

    public function hasLastName(){
    	return auth()->user()->last_name!=null? true : false;
    }

    public function getFullName(){
    	return auth()->user()->first_name . ' ' . auth()->user()->last_name;
    }

    public function getShortName(){
	    return auth()->user()->first_name ;
	}
}
