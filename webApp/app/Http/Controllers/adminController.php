<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cate;
class adminController extends Controller
{
    public function getAdmin(){
    	$cate = cate::all();
    	return view('admin.frontend.index',compact('cate'));
    }
}
