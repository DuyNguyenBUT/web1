<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VegetablesController extends Controller
{
    public function loadVegetables(){
    	return view('backend.vegetables');
    }
}
