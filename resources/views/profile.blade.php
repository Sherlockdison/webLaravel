<!-- PROFILE VIEW  -->
@extends('layout.base')

@section('title', 'Profile')

@section('main_content')
  <h1 class=user-name >Bienvenidx {{Auth::user()->name}}</h1>
			<div class="allContainer">
					<div class="container-profile-img">
						<img src="/storage/users/images/{{Auth::user()->avatar}}" width="100">
					</div>
					<div class="container-profile-data">
					<h3 class=user-data>{{Auth::user()->email}}</h3>

					<h3 class=user-data>{{Auth::user()->country}}</h3>
					</div>
				</div>
			<section class="user-profile-options">
				<p><a	href="#"></a> Mis compras</p>
				<p><a	href="#"></a> Wishlist</p>
			</section>
@endsection
