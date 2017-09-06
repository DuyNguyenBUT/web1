<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class indexController extends Controller
{
    public function getIndex(){
    	$products = DB::table('cate')->select('id', 'ten_sanpham', 'ma_sanpham','gia','giam_gia','img_path')->orderBy('id','DESC')->get();
    	return view('frontend.index',compact('products'));
    }
}
