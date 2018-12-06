
var inputEmail = document.querySelector('[name=email]');
var inputPassword = document.querySelector('[name=password]');
var theSubmitButton = document.querySelector('[type=submit]');
var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
var regexNumber = /^[0-9]*$/;
var theForm = document.querySelector('#contactForm');
console.log(theForm);


var theInputs = Array.from(theForm.elements);

// leave out last form elements
theInputs.pop(); // btn ver password
theInputs.pop();// btn submit


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


function emailValidation () {

	var errorTxt = this.parentElement.querySelector('span');

	if (this.value.trim() === '') {
			errorTxt.innerText = 'Este campo es obligatorio';

		this.classList.add('error');
	} else if (!regexEmail.test(this.value.trim())) {
		this.classList.add('error');
		errorTxt.innerText = 'Ingresá un formato de email valido';
	} else{
		this.classList.remove('error');
		errorTxt.innerText = '';
	}
}

//Password ontime Validation
inputPassword.addEventListener('blur', inputValidation);
//Email ontime Validation
inputEmail.addEventListener('keyup', emailValidation);
inputEmail.addEventListener('blur', emailValidation);

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
