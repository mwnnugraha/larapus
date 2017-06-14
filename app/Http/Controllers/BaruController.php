<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaruController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }
      public function test()
    {
    	$a = "Hallo selamat siang"();
    	return $a;
    }
    

    
}
