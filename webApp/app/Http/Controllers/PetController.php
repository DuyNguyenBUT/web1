<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function loadPet(){
    	return view('backend.pet');
    }
}
