@extends('layout.base')

@section('title', "Resultados")

@section('main_content')


<div class="container">
  <h2>Su busqueda con la palabra "{{$queryString}}", arrojo los siguientes resultados</h2>
  @forelse ($result as $product)
    <div class="card col-md-12">
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <a href="/products/{{ $product->id }}" class="btn btn-outline-dark">Detalle</a>
      </div>
    </div>
  @empty
    <div class="card col-md-12">
      <div class="card-body">
        <p class="card-text"><strong>Su busqueda no arrojo resultados</strong></p>
      </div>
    </div>
  @endforelse
</div>
@endsection
