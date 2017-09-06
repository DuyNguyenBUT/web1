<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtTensanpham'  => 'required|unique:cate,ten_sanpham'
        ];
    }
    public function message(){
        return [
            'txtTensanpham.required' => 'Nhập Tên Sản Phẩm',
            'txtTensanpham.unique' => ' Tên Sản Phẩm Đã Trùng Với 1 Sản Phẩm Khác'
        ];
        
    }
}
