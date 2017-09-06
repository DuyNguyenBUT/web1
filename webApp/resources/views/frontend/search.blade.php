<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Search</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<input type="text" class="form-control" id="search" name="search">
					</div>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td>ID</td>
								<td>Ten San PHam</td>
								<td>Ma San Pham</td>
								<td>Gia</td>
								<td>Khac</td>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('#search').on('keyup',function(){
			$value = $(this).val();
			$.ajax({
				type : 'get',
				url  : '{{ URL::to('search') }}',
				data : {'search1':$value},
				success:function(data){
					$('tbody').html(data);
				}
			});
		});
	</script>
</body>
</html>