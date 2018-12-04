@extends('layout.base')

@section('title', 'Editar Producto')

@section('main_content')
<div class="container">

  <h1>Editando Producto <strong>--{{$product->name}}--</strong></h1>

  <img class="formImg" src="{{$product->img1}}">

  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
    </div>
  @endif
    <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="form-row">


        <div class="form-group col-md-6">
          <label>Nombre del producto</label>
          <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid': ''}}" value="{{old('name', $product->name)}}">
          <div class="invalid-feedback">
            {{ $errors->first('name')}}
        </div>
      </div>
      <div class="form-group col-md-2">
        <label>Talle:</label>
        <select class="form-control" name="size_id" value="{{ old('size_id') }}">
          <option value="">Elegí</option>
          @foreach ($sizes as $size)
            <option
            value="{{ $size->id }}"
            {{ $size->id == $product->size_id ? 'selected' : '' }}
            >
            {{ $size->size }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-2">
      <label>Stock:</label>
      <input type="number" name="stock" class="form-control" value="{{old('stock', $product->stock)}}">
    </div>
    <div class="form-group col-md-2">
      <label>Precio:</label>
      <input type="number" name="price" class="form-control" value="{{old('price', $product->price)}}">
    </div>
</div>
<div class="form-group">
  <label>Pertenece a:</label>
  <select class="form-control" name="user_id" value="{{ old('user_id') }}">
    <option value="">......</option>
    @foreach ($users as $user)
      <option
      value="{{ $user->id }}"
      {{ $user->id == $product->user_id ? 'selected' : '' }}
      >
      {{ $user->name }}
    </option>
  @endforeach
</select>
</div>

        <div class="form-group">
          <label>Descripción:</label>
          <input type="text" name="description" class="form-control" value="{{old('description', $product->description)}}">
        </div>





        <div class="form-group">
    			<label>Imagen princial:</label>
    			<div class="custom-file">
    		    	<input type="file" class="custom-file-input" id="customFile" name="img1">
    		    	<label class="custom-file-label" for="customFile">Choose file...</label>
    		  	</div>
    		</div>

        <div class="formButtons">
          <button type="submit" class="btn btn-outline-dark es30">Crear producto</button>
        </div>

    </form>
</div>
@endsection
