<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function getServices(){
    	return view('frontend.services');
    }
}
