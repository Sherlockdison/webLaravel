<!-- LAYOUT BLADE HTML CONFIG -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<!-- meta -->
		<meta charset="utf-8">
			<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- title -->
		<title>@yield('title')</title>

		<!-- scripts -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Telex" rel="stylesheet">

		<!-- styles -->
		{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/styles.css') }}" title="default">
	<link rel="alternate stylesheet" href="{{ asset('/css/styles-dark.css') }}" title="dark">
		<!-- favicon -->
		<link rel="shortcut icon" href="{{ asset('/public/favicon.jpg') }}">
	</head>

	<!-- body -->
	<body class="@yield('name')">
		<!-- header -->
		@include('layout.navbar')

		<!-- content -->
		{{-- <div class="container"> --}}
			@yield('main_content')
		{{-- </div> --}}

		<!-- footer -->
    @include('layout.footer')

	<!-- script -->
		      <script src="js/jquery-3.3.1.min.js"></script>
					   <script>
						     $(".toggle-nav").click(function () {
							          $(".navbar-nav ul").slideToggle(350);
		              });
		        </script>
		@yield ('page-scripts')
	</body>
</html>
