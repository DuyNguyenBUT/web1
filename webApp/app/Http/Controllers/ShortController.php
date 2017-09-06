<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function loadShort(){
    	return view('backend.short-codes');
    }
}
