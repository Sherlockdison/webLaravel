<!-- PROFILE VIEW  -->
@extends('layout.base')

@section('title', 'Profile')

@section('main_content')
			<div class="allContainer">
  <h3 class=user-name >{{Auth::user()->name}}</h3>
    <h4 class=user-data>{{Auth::user()->country}}</h4>

	<div class="container-profile-img">
						<img class="user-profile-image" src="/storage/users/images/{{Auth::user()->avatar}}">
	</div>
<div class="profile-buttons">

  <a class="btn btn-outline-dark fill"href="/products/create"> Crear producto </a>
  <a class="btn btn-outline-dark fill"href="/products/create"> Buscar un producto </a>
  <a class="btn btn-outline-dark fill "href="/products/create"> Stock Local </a>
  <a class="btn btn-outline-dark fill"href="/products/create"> Ingresar Movimiento </a>

</div>

         </div>



@endsection
