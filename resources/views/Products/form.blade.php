<!-- CREATE PRODUCT VIEW  -->
@extends('layout.base')

@section('title', 'Crear Producto')

@section('main_content')

<div class="container-page">
     <!-- Create product Form -->
     <div class="container-form-auto" "register">
       <div class="container-form-auto">
          <!-- form header -->
          <div class="form-header">
  		      <h1> Producto Nuevo </h1>
          </div>

        <!--Error Count -->
        @if (count($errors) > 0)
      		<div class="alert alert-danger">
      			<ul>
      			@foreach ($errors->all() as $error)
      				<li>{{ $error }}</li>
      			@endforeach
      			</ul>
      		</div>
      	@endif

        <!-- form body -->
         <div class="form-body">
          <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- name input -->
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nombre del producto</label>
              <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}">
            </div>
            <div class="form-group col-md-2">
            <!-- size input -->
              <label>Talle:</label>
              <select class="form-control" name="size_id" value="{{ old('size_id') }}" style=" margin-top: 0px;">
                <option >Elegí</option>
                  @foreach ($sizes as $size)
                    <option value="{{ $size->id }}" {{ $size->id == old('size_id') ? 'selected' : '' }}>
                      {{ $size->size }}
                    </option>
                  @endforeach
              </select>
            </div>
            <!-- sctock input -->
            <div class="form-group col-md-2">
              <label for="stock">Existencias</label>
              <input type="number" class="form-control" name="stock" placeholder="3" value="{{ old('stock') }}">
            </div>
            <!-- price input -->
            <div class="form-group col-md-2">
              <label for="price">Precio</label>
              <input type="number" class="form-control" name="price" placeholder="11.5" value="{{ old('price') }}">
            </div>
          </div> <!-- end form-row -->
            <!-- location -->
          <div class="form-group">
            <label>Ubicacion:</label>
            <select class="form-control" name="user_id" value="{{ old('user_id') }}">
              <option value="">......</option>
                @foreach ($users as $user)
                  <option value="{{ $user->id }}" {{ $user->id == old('user_id') ? 'selected' : '' }}>
                    {{ $user->name }}
                  </option>
                @endforeach
             </select>
          </div>
          <!-- description input -->
          <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" class="form-control" name="description" placeholder="tipo, textil, detalle, color ..." value="{{ old('description') }}">
          </div>
          <!-- img input -->
          <div class="form-group">
            <label>Imagen princial:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="img1">
                <label class="custom-file-label" for="customFile">Eleige un archivo ...</label>
              </div>
          </div>
          <!-- buttons -->
          <div class="formButtons">
            <a href="/products" class="btn btn-outline-dark es30">Atrás</a>
            <button type="submit" class="btn btn-outline-dark es30">Crear producto</button>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
