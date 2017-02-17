<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   

	<link rel="stylesheet" href="{{ asset('src/css/metro.css') }}">
	<link rel="stylesheet" href="{{ asset('src/css/metro-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('src/css/metro-responsive.css') }}">
	<link rel="stylesheet" href="{{ asset('src/css/ocrs.css') }}">
	<link rel="stylesheet" href="{{ asset('src/css/animate-custom.css') }}">
	<link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('src/css/demo.css') }}">

	<script src="{{ asset('src/js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('src/js/metro.js') }}"></script>
	<script src="{{ asset('src/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('src/js/ocrs.js') }}"></script>
</head>
		@yield('content')

</html>