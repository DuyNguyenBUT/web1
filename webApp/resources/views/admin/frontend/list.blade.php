@extends('admin.master')

@section('list')
<div>
	<h3 class="inner-tittle two " style="text-align: center;color: black; " >Danh Sách Sản Phẩm</h3>	
</div>
</div>


	<div class="graph">
		<div class="tables">		
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Mã Sản Phẩm</th>
						<th>Tên Sản Phẩm</th>
						<th>Giá</th>
						<th>Giảm giá</th>
						<th>Thời gian nhập</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody class="loadSearch">
				<!-- @php   $stt = 0;  @endphp -->
				@foreach($data as $item)				
					<tr>
						<th scope="row">{{ $item->id }}</th>
						<td>{{ $item->ma_sanpham }}</td>
						<td>{{ $item->ten_sanpham }}</td>
						<td>{{  $item->gia }}</td>
						<td>{{ $item->giam_gia }}</td>
						<td>{{ $item->created_at }}</td>
						<td ><a href="{!! URL::route('admin.frontend.getEdit',$item['id']) !!}">Sửa</a></td>
						<td><a onclick="return xacnhanxoa('Xác Nhận Xóa')" href="{!! URL::route('admin.frontend.getDelete',$item['id']) !!}" style="color: red">Xóa</a></td>
					</tr>
				@endforeach
				</tbody>
			</table>
	</div>
	</div>
@endsection