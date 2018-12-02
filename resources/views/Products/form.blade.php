@extends('layouts.app')

@section('content')
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

    <div class="form-group">
      <label>Nombre del producto</label>
      <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    </div>

    <div class="form-group">
      <label>Descripcion</label>
      <input type="text" name="description" class="form-control" value="{{ old('description') }}">
    </div>

    <div class="form-group">
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

    <div class="form-group">
      <label>Precio</label>
      <input type="number" name="price" class="form-control" value="{{ old('price') }}">
    </div>

    <div class="form-group">
      <label>Stock</label>
      <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
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
      <label>Imagen princial:</label>
      <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="img1">
          <label class="custom-file-label" for="customFile">Choose file...</label>
        </div>
    </div>

    <button type="submit" class="btn btn success">Crear </button>
  </form>

@endsection
