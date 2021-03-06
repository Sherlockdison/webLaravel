<!-- PRODUCTS MAIN VIEW -->
@extends('layout.base')

@section('title', 'Products')

@section('main_content')
<!-- session  -->
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
  <!-- carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/images/carrousel/cenOne.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/carrousel/cenTwo.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/carrousel/cenThree.jpg" alt="Third slide">
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
  <!-- create product button only logged users-->
    <div class="contCrear">
      {{-- @guest

      @else --}}
          <a href="/products/create" class="btn btn-outline-dark" style= "width:100%;">crear producto</a>
      {{-- @endguest --}}
      <h4>Productos<span>({{ $allProducts }})</span></h4>
    </div>
<!-- product catalog -->
  <div class="shop-products">
    @foreach ($products as $product)
      <div class="card formInput" style="width: 20em; margin: 0.9em;">
      <img class="card-img-top" src="/storage/products/{{$product->img1}}" alt="Card image cap">
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
