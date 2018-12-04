@extends('layout.base')

@section('title', 'Products')

@section('main_content')
  @if ( session('deleted') )
    <div class="alert alert-success">
      {{ session('deleted') }}
    </div>
  @endif

  @if ( session('edited') )
    <div class="alert alert-success">
      {{ session('edited') }}
    </div>
  @endif
<div class="container">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/storage/stylePage/images/carrousel/cenOne.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/storage/stylePage/images/carrousel/cenTwo.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/storage/stylePage/images/carrousel/cenThree.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="contCrear">
  <a href="/products/create" class="btn btn-secondary btn-lg btn-block" >crear producto</a>
  <h2 class="titleProduts">Productos  <span>({{ $allProducts }})</span></h2>
</div>





<div class="shop-products">

@foreach ($products as $product)

  <div class="card" style="width: 20em; margin: 0.9em;">
  <img class="card-img-top" src="{{$product->img1}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $product->name }}</h5>
    <p class="card-text">{{ $product->price }}</p>
    <a href="/products/{{ $product->id }}" class="btn btn-primary btn btn-outline-dark">Detalle</a>
  </div>
</div>
@endforeach
</div>
{{$products->links()}}
@endsection
