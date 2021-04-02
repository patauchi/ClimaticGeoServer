<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
	<script type="{{mix('/js/app.js')}}"></script>
</head>
<body>

	@include('include.nav')
	@include('include.sessionStatus')
	@yield('content')

</body>
</html>