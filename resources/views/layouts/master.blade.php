<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> @yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	
</head>
<style>
@yield('styles')

.bg {
    /* The image used */
    background-image: url("uzsisakyk.jpg");

    /* Full height */
    height: 100%; 

     /*Center and scale the image nicely */
    background-position: contain;
    background-repeat: no-repeat;
    background-size: cover;
    
}

</style>


<body class="bg">
	@include('partials.header')
	<div class="container" >
		@yield('content')
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

@yield('script')
</body>
</html>