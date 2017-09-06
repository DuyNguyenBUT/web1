@extends('admin.master')

@section('edit')

<div class="set-4">
<div class="graph-2 general">
<!--/forms-->
	<div class="forms-main">
	<h2 class="inner-tittle">Category Edit </h2>
		<div class="graph-form">
			<div class="form-body">
				<form action="" method="post"> 
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group"> 
						<label for="exampleInputEmail1">Tên Sản Phẩm</label>
						<input type="text" class="form-control" name="txtTensanpham" placeholder="Tên Sản Phẩm" 
						value="{!! old('txtTensanpham',isset($data) ? $data['ten_sanpham'] : null) !!}">
					</div> 
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>{!! $error !!}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<div class="form-group"> 
						<label>Mã Sản Phẩm</label>
						<input type="text" class="form-control" name="txtMasanpham" placeholder="Mã Sản Phẩm" value="{!! old('txtMasanpham',isset($data) ? $data['ma_sanpham'] : null) !!}">
					</div>
					<div class="form-group"> 
						<label>Khác</label>
						<input type="text" class="form-control" name="txtKhac" id="exampleInputEmail1" placeholder="Khác" value="{!! old('txtKhac',isset($data) ? $data['khac'] : null) !!}">
					</div>
					<div class="form-group"> 
						<label>Giá</label>
						<input type="text" class="form-control" name="txtGia" id="exampleInputEmail1" placeholder="Giá" value="{!! old('txtGia',isset($data) ? $data['gia'] : null) !!}">
					</div>
					<div class="form-group"> 
						<label>Giảm Giá</label>
						<input type="text" class="form-control" name="txtGiamgia" id="exampleInputEmail1" placeholder="Giảm Giá" value="{!! old('txtGiamgia',isset($data) ? $data['giam_gia'] : null) !!}">
					</div>	
					<div class="form-group"> 
						<label>Thông Số</label>
						<input type="text" class="form-control" name="txtThongso" id="exampleInputEmail1" placeholder="Thông Số" value="{!! old('txtThongso',isset($data) ? $data['thong_so'] : null) !!}">
					</div>
					<div class="form-group"> 
						<label>Số Lượng</label>
						<input type="text" class="form-control" name="txtSoluong" id="exampleInputEmail1" placeholder="Số Lượng" value="{!! old('txtSoluong',isset($data) ? $data['so_luong'] : null) !!}">
					</div>
					<div class="form-group"> 
						<label>ID</label>
						<input type="text" class="form-control" name="txtID" id="exampleInputEmail1" placeholder="ID" value="{!! old('txtID',isset($data) ? $data['category_id'] : null) !!}">	
					</div>
					<div class="form-group"> 
						<label for="exampleInputFile">Hình Ảnh</label> 
						<input type="file" id="exampleInputFile" name="HinhAnh" value="{!! old('HinhAnh',isset($data) ? $data['img_path'] : null) !!}"> 
					</div>  
					<button type="submit" class="btn btn-default" name="">Edit</button>
				</form> 
			</div>

		</div>
			
					<div class="clearfix"> </div>
						</div>

	
@endsection