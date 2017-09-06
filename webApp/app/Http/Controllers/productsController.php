<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cate;

use DB;


class productsController extends Controller
{
    public function getAdd(){
        return view('admin.products.add');
    }
    
    public function getList(){
        return view('admin.products.list');
    }
    public function loadProducts(){
     $cate            =   cate::all();
     return view('backend.products',compact('cate'));
 }

 public function postAdd(ProductsRequest $products_request){
    $file_name = $products_request->file('HinhAnh')->getClientOriginalName();
    $cate = new cate();
    $cate->ten_sanpham  = $request->txtTensanpham;
    $cate->ma_sanpham   = $request->txtMasanpham;
    $cate->khac         = $request->txtKhac;
    $cate->gia          = $request->txtGia;
    $cate->giam_gia     = $request->txtGiamgia;
    $cate->img_path     = $file_name;
    $cate->thong_so     = $request->txtThongso;
    $cate->so_luong     = $request->txtSoluong;
    $cate->category_id  = $request->txtID;
    $products_request->file('HinhAnh')->move('resources/upload/',$file_name);
    $cate->save();
    return redirect()->route('admin.products.getList')->with(['flash_level'=>'Thêm Thành công','flash_message'=>'Thêm Thành Công']);
}


















     /**
    * call stored procedure to search
    * -----------------------------------------------
    * @author      :   TriNM - ANS815 - 2017/02/27 - create
    * @param       :
    * @return      :
    * @access      :   public
    * @see         :   remark
    */


     public function getProducts(){
       $cate 			= 	cate::all();

    	// dd($products);    	
       return view('frontend.products',compact('cate'));
   }




     /**
    * call stored procedure to search
    * -----------------------------------------------
    * @author      :   TriNM - ANS815 - 2017/02/27 - create
    * @param       :
    * @return      :
    * @access      :   public
    * @see         :   remark
    */

     public function search(Request $request)
     {
        if($request->ajax())
        {
            $output="";
            $customers=DB::table('cate')->where('ten_sanpham','LIKE','%' .$request->search. '%')
                                        ->orWhere('ma_sanpham','LIKE','%' .$request->search. '%')
                                        ->orWhere('gia','LIKE','%' .$request->search. '%')->get();
            if($customers)
            {
                foreach ($customers as $key => $customers) {
                    $output.='<tr>'.
                    '<td>'.$customers->id.'</td>'.
                    '<td>'.$customers->ten_sanpham.'</td>'.
                    '<td>'.$customers->ma_sanpham.'</td>'.
                    '<td>'.$customers->gia.'</td>'.
                    '<td>'.$customers->khac.'</td>'.
                    
                    '</tr>';
                }
                return response($output);
                
            }
        }
    }

}

     