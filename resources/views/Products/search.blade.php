@extends('layout.base')

@section('title', "Buscador")

@section('main_content')

  <h2>Buscar Productos </h2>
	<form action="/products/result" method="get">
		<div class="form-group">
			<input type="text" name="searchProduct" class="from-control">
			<button type="submit" class="btn btn-info">Buscar</button>
		</div>
	</form>

@endsection
