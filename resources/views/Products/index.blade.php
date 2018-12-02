@extends('layouts.app')

@section('title', 'Products')

@section('content')

  <h2>Lista de Usuarios - Total ({{ $allProducts }})</h2>

  {{-- @if ( session('deleted') )
    <div class="alert alert-success">
      {{ session('deleted') }}
    </div>
  @endif

  @if ( session('edited') )
    <div class="alert alert-success">
      {{ session('edited') }}
    </div>
  @endif --}}

  <br>
  <a href="/products/create" class="btn btn-info btn-lg">crear producto</a>
  <br>

	<ul>
	@foreach ($products as $product)

		<li style="padding: 10px 0;">
			<h3>Nombre: {{ $product->name }} </h3>
      <p>Precio: {{ $product->price }}</p>
      <a href="/products/{{ $product->id }}" class="btn btn-success">ver detalle</a>
    </li>
	@endforeach

{{$products->links()}}

@endsection
