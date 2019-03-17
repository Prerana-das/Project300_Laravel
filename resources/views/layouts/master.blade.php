<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>@yield('title')</title>
		<!--Favicon-->	
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<!-- Fontawesome css -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/css/fontawesome-all.min.css')}}" media="all" />
		<!-- Animate css -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/css/animate.min.css')}}"/>
		<!-- owl carousel css -->
		<link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">
		<!-- magnific popup css -->
		<link rel="stylesheet" href="{{asset('public/css/magnific-popup.css')}}">
		<!-- bicon css -->
		<link rel="stylesheet" href="{{asset('public/css/bicon.min.css')}}">
		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet"> 
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}" media="all" />
		<!-- Custom styles for this template -->
	   <link rel="stylesheet" type="text/css" href="{{asset('public/style.css')}}" media="all" />
	   <!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/css/responsive.css')}}" media="all" />
	</head>
	
	<body>

		@include('shared.header')
	
		@yield('content')
		
		@include('shared.footer')
		

		 <!-- Placed at the end of the document so the pages load faster -->
		<script src="{{asset('public/js/jquery-1.12.4.min.js')}}"></script>
		<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('public/js/jquery.magnific-popup.min.j')}}"></script>
		<script src="{{asset('public/js/onepagenav.j')}}"></script>
		<script src="{{asset('public/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('public/js/wow.min.js')}}"></script>
		<script src="{{asset('public/js/main.js')}}"></script>
		<script src="{{asset('public/js/holder.min.js')}}"></script>
	</body>
</html>