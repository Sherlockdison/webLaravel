<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		@yield ('page-scripts')
	</body>
</html>
