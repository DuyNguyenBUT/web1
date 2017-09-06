<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
	public function Search(Request $request)
	{
		if($request->ajax())
		{
			$output="";
			$customers=DB::table('cate')->where('ten_sanpham','LIKE','%' .$request->search1. '%')
										->orWhere('ma_sanpham','LIKE','%' .$request->search1. '%')
										->orWhere('gia','LIKE','%' .$request->search1. '%')->take(10)->get();
			if($customers)
			{
				foreach ($customers as $key => $customers) {
					$output.='<tr>'.
					'<td>'.$customers->id.'</td>'.					
					'<td>'.$customers->ma_sanpham.'</td>'.					
					'<td>'.$customers->ten_sanpham.'</td>'.					
					'<td>'.$customers->gia.'</td>'.					
					'<td>'.$customers->giam_gia.'</td>'.					
					'<td>'.$customers->created_at.'</td>'.
									
					'</tr>';
				}
				return response($output);			
			}
		}
	}
}

