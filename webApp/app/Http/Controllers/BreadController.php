<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreadController extends Controller
{
    public function loadBread(){
    	return view('backend.bread');
    }
}
