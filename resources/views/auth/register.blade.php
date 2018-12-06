@extends('layout.base')

@section('title', 'Register')

@section('main_content')
  <div class="container-page">
  		 <!-- Register-Form -->
  		 <div class="container-form" "register">
  			 <div class="container-form">
  			    <!-- form header -->
  			    <div class="form-header">
  				    <h2>{{ __('Registrate') }}</h2>
  				    <p>Por favor llena este formulario <br>para crear una cuenta.</p>
  			    </div>
            <!-- form body -->
          	<div class="form-body">
  						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
  								@csrf
              <!-- name input -->
              <div class="input-container">
                <div>
                  		<label  for="name">  <b>{{ __('Nombre Completo') }}</b></label>
  										<input id="name"
  										 type="text"
  										 class="formInput{{ $errors->has('name') ? ' is-invalid' : '' }}"
  										 name="name"
  										 value="{{ old('name') }}" required autofocus
  										 placeholder="Juana Perez"
  										 >
  								</div>
                  <!-- name auth -->
  										 <div>
  												 @if ($errors->has('name'))
  														 <span class="invalid-feedback" role="alert">
  																 <strong>{{ $errors->first('name') }}</strong>
  														 </span>
  												 @endif
  										 </div>
  										<br>
                      <!-- JS Validation Error Text -->
                      <span class="errorText"></span>
              </div>
  						<!-- Create Username input -->
              <div class="input-container">
      						<div>
  										<label><b>Nombre de usuario</b></label>
  										<input
  										id="user_name"
  										type="text"
  										class="formInput{{ $errors->has('user_name') ? ' is-invalid' : '' }}"
  										name="user_name"
  									  value="{{ old('user_name') }}"
                      placeholder="juanita"
  										required>
  								</div>
  										<!-- Username auth -->
  								<div>
  										@if ($errors->has('user_name'))
  												<span class="invalid-feedback" role="alert">
  														<strong>{{ $errors->first('user_name') }}</strong>
  												</span>
  										@endif
  								</div>
                  <!-- JS Validation Error Text -->
                  <span class="errorText"></span>
              </div>
  						<!-- Email input -->
  						<div class="input-container">		<div>
  									<label  for="email">  <b>{{ __('E-Mail') }}</b></label>
  											<br>
  											<input id="email"
  											type="email"
  											class="formInput{{ $errors->has('email') ? ' is-invalid' : '' }}"
  											name="email"
  											placeholder="juanita@gmail.com"
  											value="{{ old('email') }}" required autofocus
  											>
  								</div>
  										<!-- Email auth -->
  								<div>
  									@if ($errors->has('email'))
  											<span class="invalid-feedback" role="alert">
  													<strong>{{ $errors->first('email') }}</strong>
  											</span>
  									@endif
  								</div>
                  <!-- JS Validation Error Text -->
                  <span class="errorText"></span>
              </div>
              <!-- Country select -->
              <div class="input-container">
                <div>
                    <label for="country"><b>{{ __('Selecciona tu País') }}</b></label>
                    <select id="country"
                    class="countries" "formInput{{ $errors->has('country') ? ' is-invalid' : '' }}"
                    name="country"
                    value="{{ old('country') }}" required>
                          <option value="">Elige uno</option>
                    </select>
                </div>
                  <!-- country auth-->
                <div>
                    @if ($errors->has('country'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- JS Validation Error Text -->
                <span class="errorText"></span>
                </div>
                <!-- State select -->
                <div class="input-container" "stateSelect" style="display:none;">
                  <div>
                      <label for="state"><b>{{ __('Selecciona tu Provincia') }}</b></label>
                      <select id="state"
                      class="state" "formInput{{ $errors->has('State') ? ' is-invalid' : '' }}"
                      name="country"
                      value="{{ old('state') }}" required>
                            <option value="">Elige una</option>
                      </select>
                  </div>
                    <!-- state auth-->
                  <div>
                      @if ($errors->has('state'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('state') }}</strong>
                          </span>
                      @endif
                  </div>
                  <!-- JS Validation Error Text -->
                  <span class="errorText"></span>
              </div>
  						<!-- form Password input -->
              <div class="input-container">
  								<div>
                  <label for="password"><b>{{ __('Ingresa tu
                    contraseña') }}</b></label>
                      <br>
                      <input id="password"
                      type="password"
                      class=
                            "formInput{{ $errors->has('password') ? ' is-invalid' : '' }}"
                      name="password" required
                      placeholder= "sólo letras y numeros"
                      >
  								</div>
                  <!-- form Password auth -->
                  <div>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
                  <!-- JS Validation Error Text -->
                  <span class="errorText"></span>
              </div>

                  <!-- form Confirm Password -->
              <div class="input-container">
  								<div>
  										<label for="password-confirm">
                        <b>{{ __('Confirma tu contraseña') }}</b></label>
                        <input id="password-confirm" type="password" class="formInput" name="password_confirmation" required>
  								</div>
                  <!-- JS Validation Error Text -->
                  <span class="errorText"></span>
              </div>
              <!-- image input -->
              <div class="input-container">
  								<div class="custom-file">
  											<label class="custom-file-label" for="customFile"><b> Seleciona una imagen de perfil...</b></label>
  											<input type="file" class="formInput" id="customFile" name="avatar">
  								</div>
                  <!-- JS Validation Error Text -->
                  <span class="errorText"></span>
              </div>
              <!-- End form body -->
              <button type="button" class="cancelBtn">Cancelar</button>
              <button type="submit" class="signupBtn">Registrarme</button>
  					 	</form>

              </div>
                  <!-- side Image -->
              <div class="container-img">
                      <img src="images/page-img/leaves.jpg"	class="page-img">
              </div>
            <!-- end of side Image -->
  		 	</div>
  	    </div> <!-- end of Register-Form -->
  </div>
@endsection

@section ('page-scripts')
  <script src="{{ asset('js/login.js') }}"></script>
@endsection
