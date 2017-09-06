
<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{ asset('css/admin/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('css/admin/style.css') }}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ asset('css/admin/font-awesome.css') }}" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{ asset('css/admin/icon-font.min.css') }}" type='text/css' />
<!-- //lined-icons -->
<script src="{{ asset('js/admin/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('js/admin/amcharts.js') }}"></script>	
<script src="{{ asset('js/admin/serial.js') }}"></script>	
<script src="{{ asset('js/admin/light.js') }}"></script>	
<script src="{{ asset('js/admin/radar.js') }}"></script>	
<link href="{{ asset('css/admin/fabochart.css') }}" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="{{ asset('js/admin/css3clock.js') }}"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="{{ asset('js/admin/skycons.js') }}"></script>


<!--CKeditor $$ CKfinder-->
<script type="text/javascript" src="{{ asset('js/admin/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/ckfinder/ckfinder.js') }}"></script>

<script>
	var baseURL = "{!! url('/') !!}";
	arler(baseURL);
</script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
		<div style="margin-top : 10px;">
			<div style="width: 300px; float: right; margin-right: 40px;">
				<div class="row">
				<h3>Tìm Kiếm</h3>
					<div id="custom-search-input" >
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Search" id="search" />
							<span class="input-group-btn">
							</span>
						</div>
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
						$('.loadSearch').html(data);
					}
				});
			});
		</script>
					<div class="clearfix"></div>
					
				</div>
				<div class="container" style="margin-left: 50px;height: auto; color: green; text-align: center; background-color: #ccc"  >
					@if(Session::has('flash_message'))
						<div class="alert alert{!! Session::get('flash_level') !!}">
							{!! Session::get('flash_message') !!}
						</div>
					@endif
				</div>
				<div style="margin-left: 50px;height: auto;">
					@yield('add')
					@yield('list')
					@yield('edit')
				</div>
					
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#"> </a> <a href="index.html"> <span id="logo"> <h1 style="text-align: center;">Admin</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"> <img src="{{ asset('images/duy.jpg') }}" style="height: 100px;width: 100px;"></a>
									  <a href="index.html"><span class=" name-caret">DuyUs</span></a>
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
							   <div class="menu">
							   	<ul id="menu" >
							   		<li>
							   			<a href="/">
							   				<i></i>
							   				<span>Trang Chủ	</span>
							   			</a>
							   		</li>
							   		<li id="menu-academico" >
							   			<a href="{!! URL::route('admin.frontend.getAdd') !!}">
							   				<i></i>
							   				<span> Thêm Sản Phẩm</span>
							   			</a>
							   		</li>
							   		<li id="menu-academico" ><a href="#"><i></i> <span>Sửa Sản Phẩm</span></a>
							   		</li>
							   		<li>
							   			<a href="typography.html">
							   				<i></i>
							   				<span>Thông Tin Sản Phẩm</span>
							   			</a>
							   		</li>
							   		<li id="menu-academico" ><a href="{!! URL::route('admin.frontend.getList') !!}"><i></i> <span>Sản Phẩm</span></a>		
							   		</li>
							   		<li><a href="#"><i></i> <span>Email</span></a>
							   			<ul>
							   				<li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
							   				<li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
							   				<li><a href="editor.html"><span class="lnr lnr-highlight"></span> Editors Page</a></li>

							   			</ul>
							   		</li>
							   		<li id="menu-academico" ><a href="#"><i></i> <span>Nhân Viên</span> </a>
							   			<ul id="menu-academico-sub" >
							   				<li id="menu-academico-avaliacoes" ><a href="grids.html">Grids</a></li>
							   				<li id="menu-academico-boletim" ><a href="media.html">Media Objects</a></li>

							   			</ul>
							   		</li>
							   		<li><a href="chart.html"><i></i> <span>Khách Hàng</span></a>
							   			<ul>
							   				<li><a href="map.html"><i class="lnr lnr-map"></i> Maps</a></li>
							   				<li><a href="graph.html"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
							   			</ul>
							   		</li>
							   		<li id="menu-comunicacao" ><a href="#"><i></i> <span>Hỗ Trợ</span></a>
							   			<ul id="menu-comunicacao-sub" >
							   				<li id="menu-mensagens" style="width:120px" ><a href="project.html">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
							   					<ul id="menu-mensagens-sub" >
							   						<li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.html">Ribbons</a></li>
							   						<li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.html">Blank</a></li>
							   					</ul>
							   				</li>
							   				<li id="menu-arquivos" ><a href="500.html">500</a></li>
							   			</ul>
							   		</li>
							   	</ul>
							   </div>
							</div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>;

							<script type="text/javascript" src="{{ asset('js/admin/myjs.js') }}""></script>

							
<!--js -->
<script type="text/javascript" src="{{ asset('js/admin/TweenLite.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/CSSPlugin.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/admin/scripts.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
</body>
</html>