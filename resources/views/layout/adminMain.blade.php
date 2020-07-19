<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{ url('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{url('css/morris.css')}}" type="text/css"/>
<!-- Graph CSS -->
<link href="{{url('css/font-awesome.css')}}" rel="stylesheet">

 <!-- Theme CSS -->
<link href="{{url('http://www.venmond.com/demo/vendroid/css/theme.min.css')}}" rel="stylesheet" type="text/css">
<!-- jQuery -->
<script src="{{url('js/jquery-2.1.4.min.js')}}"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{url('css/icon-font.min.css')}}" type='text/css' />
<!-- //lined-icons -->
</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
		<div class="mother-grid-inner">
			<!--header start here-->
			<div class="header-main">

					<img src="" alt=""width="200" height="75"></<img> <!-- Kalo ingin menambahkan foto logo  -->


                {{-- @foreach ($request as $item)   --}}
				<div class="profile_details w3l">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="{{asset('storage/'.auth()->user()->images) }}" alt=""> </span>
									<div class="user-name">
										<p>{{Auth::user()->name}}</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down"></i>
									<i class="fa fa-angle-up"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="{{ url('/home_admin/profile')}}"><i class="fa fa-user"></i> Profile</a> </li>
								<li> <a href="{{ route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
                </div>
                {{-- @endforeach --}}
				<div class="clearfix"> </div>
			</div>
			<!--heder end here-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/home_admin')}}">Home</a> <i class="fa fa-angle-right"></i>@yield('title')</li>
			</ol>

	@yield('container')

			<!-- script-for sticky-nav -->
			<script>
			$(document).ready(function() {
				var navoffeset=$(".header-main").offset().top;
				$(window).scroll(function(){
					var scrollpos=$(window).scrollTop();
					if(scrollpos >=navoffeset){
						$(".header-main").addClass("fixed");
					}else{
						$(".header-main").removeClass("fixed");
					}
				});

			});
			</script>
			<!-- /script-for sticky-nav -->
			<!--inner block start here-->
			<div class="inner-block">
			</div>
			<!--inner block end here-->
			<!--copy rights start here-->
			<div class="copyrights">
				<p>©2020 {{ config('app.name')}}</a> </p>
			</div>
			<!--COPY rights end here-->
		</div>
	</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
			<div class="menu">
				<ul id="menu" >
					<li><a href="{{url('/home_admin')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
					<li id="menu-academico" ><a href="#"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>
					<li id="menu-academico"><a href="{{ url('/home_admin/data_masuk')}}"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Data Masuk</span><div class="clearfix"></div></a>

					</li>
					<li id="menu-academico" ><a href="{{ url('/home_admin/data_proses')}}"><i class="fa fa-bar-chart"></i><span>proses Data</span><div class="clearfix"></div></a>

					</li>
					<li id="menu-academico" ><a href="{{ url('/home_admin/data_selesai')}}"><i class="fa fa-bar-chart"></i><span>Data Selesai</span><div class="clearfix"></div></a>

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
</script>
<!--js -->
<script src="{{ url('js/jquery.nicescroll.js')}}"></script>
<script src="{{ url('js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{ url('js/bootstrap.min.js')}}"></script>
   <!-- /Bootstrap Core JavaScript -->
<!-- morris JavaScript -->
<script src="{{ url('js/raphael-min.js')}}"></script>
<script src="{{ url('js/morris.js')}}"></script>


@yield('footer')
</body>
</html>
