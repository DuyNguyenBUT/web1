<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseholdController extends Controller
{
    public function loadHousehold(){
    	return view('backend.household');
    }
}
