<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cate extends Model
{
    protected $table = 'cate';

    protected $fillable = ['ten_sanpham','ma_sanpham','khac','gia','giam_gia','img_path','thong_so','so_luong','category_id'];
    //public $timestamp() = false;
}
