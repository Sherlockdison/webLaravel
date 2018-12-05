@extends('layout.base')

@section('title', 'Register')

@section('main_content')

  <div class="container-page">
	 <div class="container-img">
		 <img src="/images/page-img/leaves.jpg"	class="page-img">
	 </div>
		   <div class="container-form" "register">
			   <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
             @csrf
	        <h2>Registrate</h2>
	        <p>Por favor llena este formulario <br> para crear una cuenta.</p>

          <label for= "name"><b>{{ __('Nombre completo') }}</b></label>
	 				<input id="name"	type="text"	placeholder="Nombre completo"	name="name" class="formInput {{ $errors->has('name') ? 'invalidInputBorder' : ''}}>"	value="{{ old('name') }}" required>

            @if ($errors->has('name'))
              <span class="invalidInput" role="alert">
                 <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
              <br>

          <label for="email"><b>{{ __('Correo electrónico:') }}</b></label>
					<input id="email" type="text" placeholder="Ingresar email" name="email" class="formInput{{ $errors->has('email') ? ' invalidInputBorder' : '' }}"	value="{{ old('email') }}" required>

            @if ($errors->has('email'))
              <span class="invalidInput" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif

          <label for="user_name"><b>{{ __('Nombre de usuario') }}</b></label>
					<input id="user_name" type="text"	placeholder="Nombre de usuario" name="user_name" class="formInput{{ $errors->has('user_name') ? ' invalidInputBorder' : '' }}" value="{{ old('user_name') }}" required>

            @if ($errors->has('user_name'))
              <span class="invalidInput" role="alert">
                <strong>{{ $errors->first('user_name') }}</strong>
              </span>
            @endif

					<label for="password"><b>{{ __('Password:') }}</b></label>
					<input id="password"	type="password"	placeholder="Contraseña"	name="password"	class="formInput{{ $errors->has('password') ? ' invalidInputBorder' : '' }}" required>

            @if ($errors->has('password'))
                <span class="invalidInput" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
							<br>
          <label for="password-confirm" ><b>{{ __('Repetir password:') }}</b></label>
					<input id="password-confirm" type="password"	placeholder="Repetir password" name="password_confirmation" class="formInput" required>

          	<br>

					<label for="country"><b>{{ __('País de nacimiento:') }}</b></label>
          <input id="country" type="text" class="formInput{{ $errors->has('country') ? 'invalidInputBorder' : '' }}" name="country" value="{{ old('country') }}" required>

            @if ($errors->has('country'))
              <span class="invalidInput" role="alert">
                <strong>{{ $errors->first('country') }}</strong>
              </span>
            @endif

									<br>

    			<label><b>Imagen de perfil:</b></label>
						<div class="custom-file">
							<input id="customFile" type="file" class="customFileInput" name="avatar">
								<label class="customFileLabel" for="customFile">Elija el archivo...</label>
						</div>


					<p>Creando una cuenta aceptas nuestras <a href="#" style="color:dodgerblue">Politicas de privacidad</a>.</p>

          <button type="button" class="cancelBtn">{{__('Cancelar')}}</button>
		      <button type="submit" class="signupBtn">{{__('Registrarme')}}</button>

        </form>
      </div>
 </div>
@endsection
