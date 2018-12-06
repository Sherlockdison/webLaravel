
var inputEmail = document.querySelector('[name=email]');
var inputPassword = document.querySelector('[name=password]');
var theSubmitButton = document.querySelector('[type=submit]');
var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
var regexNumber = /^[0-9]*$/;
var theForm = document.querySelector('#contactForm');
console.log(theForm);


// capturamos todos los campos del formulario
var theInputs = Array.from(theForm.elements);

// sacamos los últimos elementos del array
theInputs.pop(); // btn ver password
theInputs.pop();// btn submit



function validarCampo () {
	// this = el input que recibe el evento

	var errorTxt = this.parentElement.querySelector('span');

	if (this.value.trim() === '') {
			errorTxt.innerText = 'Este campo es obligatorio';

		this.classList.add('error');
	} else if (!regexEmail.test(this.value.trim())) {
		this.classList.add('error');
		errorTxt.innerText = 'Ingresá un formato de email valido';
	} else {
		this.classList.remove('error');
		errorTxt.innerText = '';
	}
}


theInputs.forEach(function (input) {
	input.addEventListener('blur', validarCampo);
});


inputEmail.addEventListener('keyup', function () {
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


// submit only full & valid fields
theForm.addEventListener('submit', function (ev) {

	if (
			inputEmail.value.trim() === '' ||
			!regexEmail.test(inputEmail.value.trim())
			// inputPassword.value.trim() === '' ||
		) {

		ev.preventDefault();
		window.alert('Los campos están vacíos');
		inputName.classList.add('error');
		inputEmail.classList.add('error');
		// theSubmitButton.setAttribute('disabled', 'true');
	}
});
