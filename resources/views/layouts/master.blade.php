<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cong Nguyen</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	@include('layouts.header')
	<div id="content">
		<h1>Phan cua master.blade.php</h1>

		@yield('noidung')
	</div>
	@include('layouts.footer')
	<!-- @required('layouts.footer') -->
</body>
</html>