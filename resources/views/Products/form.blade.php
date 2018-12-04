@extends('layout.base')

@section('title', 'Crear Producto')

@section('main_content')
<div class="container">

  <h1>Creando un Producto</h1>

  @if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif

  <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Nombre del producto</label>
      <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}">
    </div>
    <div class="form-group col-md-2">
      <label>Talle:</label>
      <select class="form-control" name="size_id" value="{{ old('size_id') }}">
        <option value="">Elegí</option>
          @foreach ($sizes as $size)
            <option value="{{ $size->id }}" {{ $size->id == old('size_id') ? 'selected' : '' }}>
              {{ $size->size }}
            </option>
          @endforeach
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="stock">Existencias</label>
      <input type="number" class="form-control" name="stock" placeholder="3" value="{{ old('stock') }}">
    </div>
    <div class="form-group col-md-2">
      <label for="price">Precio</label>
      <input type="number" class="form-control" name="price" placeholder="11.5" value="{{ old('price') }}">
    </div>
  </div>
  <div class="form-group">
    <label>Pertenece a:</label>
    <select class="form-control" name="user_id" value="{{ old('user_id') }}">
      <option value="">......</option>
        @foreach ($users as $user)
          <option value="{{ $user->id }}" {{ $user->id == old('user_id') ? 'selected' : '' }}>
            {{ $user->name }}
          </option>
        @endforeach
     </select>
  </div>
  <div class="form-group">
    <label for="description">Descripción</label>
    <input type="text" class="form-control" name="description" placeholder="Traje de baño entero con escote recto, breteles regulables y lazo en la esp........." value="{{ old('description') }}">
  </div>
  <div class="form-group">
    <label>Imagen princial:</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="img1">
        <label class="custom-file-label" for="customFile">Choose file...</label>
      </div>
  </div>
  <div class="formButtons">
    <a href="/products" class="btn btn-outline-dark es30">Atrás</a>
    <button type="submit" class="btn btn-outline-dark es30">Crear producto</button>
</div>
</div>


@endsection
