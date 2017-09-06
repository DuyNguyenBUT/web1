@extends('admin.master')

@section('add')

<div class="set-4">
<div class="graph-2 general">
<!--/forms-->
	<div class="forms-main">
	<h2 class="inner-tittle">Products Add </h2>
		<div class="graph-form">
			<div class="form-body">

				<form action="{!! route ('admin.frontend.getAdd')!!}" method="POST" enctype="multipart/form-data"> 
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group"> 
						<label for="exampleInputEmail1">Tên Sản Phẩm</label>
						<input type="text" class="form-control" name="txtTensanpham" placeholder="Tên Sản Phẩm">
					</div> 
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
						<?php $error = 'Lỗi nghe'; ?>
							@foreach($errors->all() as $error)
							<li>{!! $error !!}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<div class="form-group"> 
						<label>Mã Sản Phẩm</label>
						<input type="text" class="form-control" name="txtMasanpham" id="exampleInputEmail1" placeholder="Mã Sản Phẩm">
					</div>
					<div class="form-group"> 
						<label>Khác</label>
						<input type="text" class="form-control" name="txtKhac" id="exampleInputEmail1" placeholder="Khác">
					</div>
					<div class="form-group"> 
						<label>Giá</label>
						<input type="text" class="form-control" name="txtGia" id="exampleInputEmail1" placeholder="Giá">
					</div>
					<div class="form-group"> 
						<label>Giảm Giá</label>
						<input type="text" class="form-control" name="txtGiamgia" id="exampleInputEmail1" placeholder="Giảm Giá">
					</div>	
					<div class="form-group"> 
						<label>Thông Số</label>
						<input type="text" class="form-control" name="txtThongso" id="exampleInputEmail1" placeholder="Thông Số">
					</div>
					<div class="form-group"> 
						<label>Số Lượng</label>
						<input type="text" class="form-control" name="txtSoluong" id="exampleInputEmail1" placeholder="Số Lượng">
					</div>
					<div class="form-group"> 
						<label>ID</label>
						<input type="text" class="form-control" name="txtID" id="exampleInputEmail1" placeholder="ID">	
					</div>
					<div class="form-group"> 
						<label for="exampleInputFile">Hình Ảnh</label> 
						<input type="file" id="exampleInputFile" name="HinhAnh" value="{!! old('HinhAnh') !!}"> 
					</div> 
					<div class="checkbox">
						<label> 
							<input type="checkbox"> Tôi Chấp Nhận
						</label> 
					</div> 
					<button type="submit" class="btn btn-default" name="">Add</button>
				</form> 
			</div>

		</div>
			
					<div class="clearfix"> </div>
						</div>

	
@endsection