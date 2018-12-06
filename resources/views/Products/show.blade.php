@extends('layout.base')

@section('title', "Detalle")

@section('main_content')
  <div class="container">
    <div class="desciptionProduct">
      @if ( session('errorDeleted') )
      	<div class="alert alert-danger">
      	  {{ session('errorDeleted') }}
      	</div>
      @endif
      <h2>{{ $product->name }}</h2>
      <img class="formImg" src="/storage/products/{{$product->img1}}" style="border-radius: 5%;">
      <p><b>Descripción:</b> {{ $product->description }}</p>
      <p><b>Talla:</b> {{ $product->size->size}}</p>
      <p><b>Precio:</b> {{ $product->price }}</p>
      <p><b>Stock:</b> {{ $product->stock ?? 'Sin Stock'}}</p>
  </div>
    <hr>
    <div class="formButtons">

    <a href="/products" class="btn btn-outline-dark es30">Atrás</a>
    <a href="/products/{{ $product->id }}/edit" class="btn btn-outline-dark es30">Editar</a>
    <form class="es30" action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline-block;">
    	@csrf
    	{{ method_field('DELETE') }}
    	<button type="submit" class="btn btn-outline-danger" style="width: 100%;">Borrar</button>
    </form>
  </div>
  </div>


@endsection
