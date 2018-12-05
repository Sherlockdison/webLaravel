@extends('layout.base')

@section('title', 'Login')

@section('main_content')
  <div class="container-page">
    <!-- side Image -->
	  <div class="container-img">
	  	<img src="/images/page-img/aquarium-01.jpg"	class="page-img">
	  </div>
		<!-- End side Image -->

		<!-- Login-Form -->
		<div class="container-form">
			<h2>Logueate</h2>

						{{-- comprobacion de errores falta--}}

	  		<form method="post" action=""{{ route('login') }}"">
          @csrf
			    	<label for="email" ><b>{{ __('Email') }}</b></label>
				      <br>
			    	<input id="email" type="email" placeholder="Ingresa el mail de registro" name="email" class= "formInput {{ $errors->has('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalidInput" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

							<br>
							<br>
							<br>

			  	  <label for="password"><b>{{ __('Contraseña') }}</b></label>
				      <br>
			   	 	<input id="password" type="password" placeholder= "Ingresa tu contraseña" name="password" class= "formInput {{ $errors->has('password') ? 'is-invalid' : ''}}" required>

            @if ($errors->has('password'))
                <span class="invalidInput" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

							<br>
							<br>

						<input class= "formCheckbox" type="checkbox" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="checkboxContainer" for="remember">{{__('Recordame')}}</label>

								<br>
								<br>
								<br>

						<button type="button" class="cancelBtn">{{__('Cancel')}}</button>
			   		<button type="submit" class="signupBtn" >{{ __('Ingresar') }}</button>

							<br>
							<br>
							<br>
							<span class="psw">Olvidaste tu <a href="{{ route('password.request') }}">{{ __('Contraseña??') }}</a></span>
		  		</form>
			</div>
		</div>

@endsection
