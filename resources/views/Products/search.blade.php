<!-- SEARCH VIEW -->

@extends('layout.base')

@section('title', "Buscador")

@section('main_content')
<div class="container-search">


  <h2 class="top-margin">Buscar Productos </h2>
  <br><br>
	<form action="/products/result" method="get">
		<div class="form-group">
			<input type="text" name="searchProduct" class="formInput">
			<button type="submit" class="signupBtn search-btn container-form">Buscar</button>
		</div>
	</form>
</div>
@endsection
