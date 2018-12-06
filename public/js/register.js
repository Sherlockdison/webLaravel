var inputName = document.querySelector('[name=name]');
var inputEmail = document.querySelector('[name=email]');
var inputUserName = document.querySelector('[name=user_name]');
var selectCountries = document.querySelector('[name=country]');
var selectCountries = document.querySelector('[name=state]');
var inputPassword = document.querySelector('[name=password]');
var inputRePassword = document.querySelector('[name=password_confirmation]');
var theAvatar = document.querySelector('[name=avatar]');
var theSubmitButton = document.querySelector('[type=submit]');
var theCancelButton = document.querySelector('[type=button]');
var theForm = document.querySelector('#contactForm');

var countrySelect = document.querySelector('.countries');
var stateSelect = document.querySelector('.stateSelect');
var state = document.querySelector('.state');



var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
var regexNumber = /^[0-9]*$/;


// capturamos todos los campos del formulario
var theInputs = Array.from(theForm.elements);
// sacamos los últimos elementos del array
theInputs.pop();// btn submit

// function declaration
	function inputValidation () {

		var errorTxt = this.parentElement.querySelector('span');

		if (this.value.trim() === '') {
				errorTxt.innerText = 'Este campo es obligatorio';

			this.classList.add('error');
		} else {
			this.classList.remove('error');
			errorTxt.innerText = '';
		}
	}

	theInputs.forEach(function (input) {
		input.addEventListener('blur', inputValidation);
	});


function validarCampo () {
	// this = el input que recibe el evento

	// parentElement nos retorna el div.input-container, capturamos al span que está dentro del padre de este input
	var errorTxt = this.parentElement.querySelector('span');

	// Si el campo está vacío
	if (this.value.trim() === '') {
		// A ese span que capturamos le asignamos este texto
		errorTxt.innerText = 'Este campo es obligatorio';

		// Al input que recibe el evento le agregamos la clase error
		this.classList.add('error');
	} else {
		this.classList.remove('error');
		errorTxt.innerText = '';
	}
}

inputDNI.addEventListener('keyup', function () {
	var errorTxt = this.parentElement.querySelector('span');

	if (!regexNumber.test(this.value.trim())) {
		this.classList.add('error');
		errorTxt.innerText = 'Ingresá solamente números';
	} else {
		errorTxt.innerText = '';
		this.classList.remove('error');
	}
});

// Recorremos el array de campos del formulario y a cada campo le asignamos el evento blur
theInputs.forEach(function (input) {
	input.addEventListener('blur', validarCampo);
});

// inputName.addEventListener('blur', validarCampo);
// inputEmail.addEventListener('blur', validarCampo);
// selectCountries.addEventListener('blur', validarCampo);

inputEmail.addEventListener('keyup', function () {
	// span que recibe el texto de error
	var errorTxt = this.parentElement.querySelector('span');

	if (this.value.trim().length > 5) {
		if (!regexEmail.test(this.value.trim())) {
			this.classList.add('error');
			errorTxt.innerText = 'Ingresá un formato de email valido';
		} else {
			errorTxt.innerText = '';
			this.classList.remove('error');
		}
	}
});

// Evento change del select
selectCountries.addEventListener('change', function () {
	// muestro en consola la opción elegida
	console.log(this.selectedIndex);
	console.log(this.options[this.selectedIndex].value);

	// capturamos al contenedor del campo ciudad
	var cityInput = document.querySelector('#cityInput');
	if (this.value === 'Argentina') {
		console.log('Si, elegiste argentina');
		cityInput.classList.remove('hidden');
	} else {
		cityInput.classList.add('hidden');
	}
});

// Validamos cuando se envía el formulario
theForm.addEventListener('submit', function (ev) {
	// Si los campos están vacíos
	if (
			inputName.value.trim() === '' ||
			inputEmail.value.trim() === '' ||
			!regexEmail.test(inputEmail.value.trim())
		) {
		// Al evento capturado evitamos que se dispare su comportamiento por default
		ev.preventDefault();
		window.alert('Los campos están vacíos');
		inputName.classList.add('error');
		inputEmail.classList.add('error');
		// theSubmitButton.setAttribute('disabled', 'true');
	}
});



//AJAX countries & states Select
function ajaxCall (url, callback) {
	window.fetch(url)
		.then(function (response) {
			return response.json();
		})
		.then(function (data) {
			callback(data);
		})
		.catch(function (error) {
			console.log(error);
		});
}

function getCountries (countries) {
	for (var country of countries) {
		var option = '<option>' + country.name + '</option>';
		countrySelect.innerHTML += option;
	}
}

function getStates (states) {
	for (var oneState of states) {
		var option = '<option>' + oneState.state + '</option>';
		state.innerHTML += option;
	}
}

ajaxCall('https://restcountries.eu/rest/v2/all', getCountries);

countrySelect.addEventListener('change', function () {
	if (this.value === 'Argentina') {
    stateSelect.classList.remove('hide');
  	ajaxCall('https://dev.digitalhouse.com/api/getProvincias', getStates);
	}else {
    stateSelect.classList.add('hide');
  }
});
