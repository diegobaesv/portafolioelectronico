<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Portafolio Electronico</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
</head>
@include('layouts.nav') 

<center >
	<h2>@yield('titulo')</h2>
	<div><h3>@yield('titulo2')</h3></div>
</center>

<body>
	<div class="container-fluid">
		
		<div class="container">
			<hr style="width:100%;">
			@yield('botones')
			@yield('content')

		</div>

		
	</div>

	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>

</html>