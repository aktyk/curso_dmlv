<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title','Aktyk Software')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js" defer></script>
</head>
<body>
	@include('partials.nav')
	@include('partials.session-status')
	@yield('content')
</body>
</html>