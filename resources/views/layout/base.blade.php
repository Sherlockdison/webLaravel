<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
	</head>
	<body class=@yield('name')>
		@include('layout.navbar')

		{{-- <div class="container"> --}}
			@yield('main_content')
		{{-- </div> --}}

    @include('layout.footer')
	</body>
</html>
