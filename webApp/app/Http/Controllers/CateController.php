<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CateRequest;

use App\cate;
class CateController extends Controller
{
    public function getAdd(){
    	return view('admin.frontend.add');
    }

    public function getList(){
        $data = Cate::select('id','ma_sanpham','ten_sanpham','gia','giam_gia','created_at')->orderBy('id','DESC')->get();
        return view('admin.frontend.list',compact('data'));
    }

    public function postAdd(CateRequest $request){
            $file_name = $request->file('HinhAnh')->getClientOriginalName();
    	    $cate = new cate();
        	$cate->ten_sanpham  = $request->txtTensanpham;
        	$cate->ma_sanpham   = $request->txtMasanpham;
        	$cate->khac 	    = $request->txtKhac;
        	$cate->gia 		    = $request->txtGia;
        	$cate->giam_gia     = $request->txtGiamgia;
        	$cate->thong_so     = $request->txtThongso;
            $cate->img_path     = $file_name;
        	$cate->so_luong     = $request->txtSoluong;
        	$cate->category_id  = $request->txtID;
            $request->file('HinhAnh')->move('resources/upload/',$file_name);
    	    $cate->save();
        return redirect()->route('admin.frontend.getList')->with(['flash_level'=>'Thêm Thành công','flash_message'=>'Thêm Thành Công']);
    }

    public function getDelete($id){

        $cate = cate::find($id);
        $cate->delete($id);
        return redirect()->route('admin.frontend.getList')->with(['flash_message'=>'Xóa Thành Công']);
    }
    public function getEdit($id){
        $data = cate::findOrFail($id)->toArray();
        return view('admin.frontend.edit',compact('data')) ;
    }

    public function postEdit(Request $request,$id){
        $this->validate($request,
                ["txtTensanpham" => "required"],
                ["txtTensanpham.required" =>"Nhập Tên Sản Phẩm"]
            );
        $cate = cate::find($id);
        $cate->ten_sanpham  = $request->txtTensanpham;
        $cate->ma_sanpham   = $request->txtMasanpham;
        $cate->khac         = $request->txtKhac;
        $cate->gia          = $request->txtGia;
        $cate->giam_gia     = $request->txtGiamgia;
        $cate->img_path     = $request->HinhAnh;
        $cate->thong_so     = $request->txtThongso;
        $cate->so_luong     = $request->txtSoluong;
        $cate->category_id  = $request->txtID;
        $cate->save();
        return redirect()->route('admin.frontend.getList')->with(['flash_level'=>'Sửa Thành công','flash_message'=>'Sửa Thành Công']);
    }
    
}
