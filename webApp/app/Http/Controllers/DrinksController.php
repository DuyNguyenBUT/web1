<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinksController extends Controller
{
    public function loadDrinks(){
    	return view('backend.drinks');
    }
}
