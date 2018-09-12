<!doctype html>
<html lang="en">
<head>
	@include('layouts.bootstrap')
	<title>TaiSport</title>
</head>
<body class="bg-secondary">
	<script src="/js/jquery.js"></script>
	@include('layouts.navbar')
	<div class="container bg-light py-3 rounded my-3">
		@yield('content')
	</div>
	@include('layouts.bootstrapjs')
</body>
</html>