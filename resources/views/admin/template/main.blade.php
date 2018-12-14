<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Portafolio Electronico</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
</head>

<body>
	@include('admin.template.partials.nav') 
	<section>
		@yield('content');

	</section>
	


	
	<script src="/js/jquery-3.3.1.js"></script>
  	<script src="/js/bootstrap.min.js"></script>

</body>
</html>