const form = document.querySelector('form')
const emailInput = document.querySelector('#email')
const passwordInput = document.querySelector('#password')
const confirmPasswordInput = document.querySelector('#password2')

form.addEventListener('submit', (e) => {

    validateForm()
})


const validateForm = function() {

    if(emailInput.value.trim() == '') {
        setError(emailInput, 'Provide email address')
    } else if(isEmailValid(emailInput.value)) {
        setSuccess(emailInput)
    } else {
        setError(emailInput, 'Provide valid email')
    }


    if(passwordInput.value.trim() == '') {
        setError(passwordInput, 'Password must not be empty')
    } else if(passwordInput.value.trim().length < 6 || passwordInput.value.trim().length > 20){
        setError(passwordInput, 'Password must be between 6 and 20 characters')
    } else {
        setSuccess(passwordInput)
    }

    if(confirmPasswordInput.value.trim() == '') {
        setError(confirmPasswordInput, 'Password must not be empty')
    } else if (confirmPasswordInput.value !== passwordInput.value){
        setError(confirmPasswordInput, 'Password does not match')
    } else {
        setSuccess(confirmPasswordInput)
    }
}


const setError = function (element, errorMessage) {
    const parent = element.parentElement
    if(parent.classList.contains('success')){
    parent.classList.remove('success')
    }
    parent.classList.add('error')
    const small = parent.querySelector('small')
    small.textContent = errorMessage
}

const setSuccess = function (element) {
    const parent = element.parentElement
    if(parent.classList.contains('error')){
        parent.classList.remove('error')
    }
    parent.classList.add('success')
}


const isEmailValid = function (email) {
    const regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
    return regex.test(email);
}