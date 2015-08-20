<!DOCTYPE html>
<html>
<head>
	<title>My Tech Store</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="{{ asset('css/global.css') }}">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/jquery.texttailor.min.js') }}"></script>
	<script src="{{ asset('js/jquery.custom.js') }}"></script>
</head>
<body style="padding-top: 70px;padding-bottom: 70px;">
	@include('partials.navbar')

	<div class="container">
		@yield('content')
	</div>

	@yield('scripts')
</body>
</html>