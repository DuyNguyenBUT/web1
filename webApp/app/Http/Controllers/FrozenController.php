<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrozenController extends Controller
{
    public function loadFrozen(){
    	return view('backend.frozen');
    }
}
