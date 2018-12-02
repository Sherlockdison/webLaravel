@extends('layout.base')

@section('title', 'Products')

@section('main_content')

<div class="shop-container">
  <h2 class="title-shop">Productos  <span>({{ $allProducts }})</span></h2>

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

  	<ul class="shop-products">
  	@foreach ($products as $product)

  		<li>
        <img src="{{$product->img1}}" width="">
  			<h4>{{ $product->name }} </h4>
        <p>Precio: {{ $product->price }}</p>
        <a href="/products/{{ $product->id }}" class="btn btn-success">ver detalle</a>
      </li>
  	@endforeach
    </ul>
  {{$products->links()}}
</div>
@endsection
