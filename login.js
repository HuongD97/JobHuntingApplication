var ERROR_MESSAGE = {
    password: {
        length: 'Password must be at least 8 characters long',
        noInput: 'Please enter a password',
    },
    email: 'Please enter a valid email'
}

var validForm = {
    isValid: null,
    email: null,
    password: null,
}

// Initializes login screen
initPage();

/**
 * Check for prepopulated form values and set the global 
 * validForm object
 */
function initPage() {
    updateForm('email', validatingInput('email', document.getElementById('emailInput').value));
    updateForm('password', validatingInput('password', document.getElementById('passwordInput').value));
}

/**
 * Update the global validForm object and disable submit button 
 * if not all fields contain valid values
 * @param {String} inputType Determines if we're validating email or password
 * @param {Object} validation Object that tells whether the field is valid and contains 
 * error message if field is not valid
 */
function updateForm(inputType, validation) {
    switch (inputType) {
        case 'email':
            validForm.email = validation.isValid;
            break;
        case 'password':
            validForm.password = validation.isValid;
            break;
    }

    var button = document.getElementById('login');
    validForm.isValid = validForm.email && validForm.password;
    if (!validForm.isValid) {
        button.setAttribute('disabled', true);
    } else {
        button.removeAttribute('disabled');
    }
}

/**
 * Checks that email addresses are valid and password is at least 8 non-space characters long
 * @param {*} inputType 
 * @param {String} value 
 * @returns {Object} Indicating if field is valid and any error message
 */
function validatingInput(inputType, value) {
    var validField = {
        isValid: true,
        message: '',
    }

    switch (inputType) {
        case 'password':
            // Force password input to be at least 8 characters 
            if (!value || value.trim().length <= 0) {
                validField.isValid = false;
                validField.message = ERROR_MESSAGE.password.noInput;
            } else if (value.trim().length < 8) {
                validField.isValid = false;
                validField.message = ERROR_MESSAGE.password.length;
            }
            break;
        case 'email':
            var isValidEmail = new RegExp('^[_a-z0-9]+(.[_a-z0-9]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,4})$');
            // Force email input to be valid
            if (!value || value.length <= 0 || !isValidEmail.test(value)) {
                validField.isValid = false;
                validField.message = ERROR_MESSAGE.email;
            }
            break;
    }

    return validField;
}

/**
 * Kickoff function for validating a form field whenever user types 
 * @param {Object} input 
 */
function validate(input) {
    var update = validatingInput(input.type, input.value);
    errorText = (input.type === 'email' ? document.getElementById('emailError') : document.getElementById('passwordError'));
    errorText.innerHTML = update.message;
    updateForm(input.type, update);
}