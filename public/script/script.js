const form = document.getElementById('form');
const login = document.getElementById('email');
const password = document.getElementById('password');
// const small = document.querySelector('small');

function checkfield(input) {
    if (input.value == "") {
        return input.name + " obligatoire";
    } else {
        if (input.name == "login") {
            const re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (input.value.match(re)) {
                return "";
            }
            return "email est invalide";
        }
        if (input.name == "password") {
            if (input.value.length < 6) {
                return "le mot de passe doit contenir 6 chiffres";
            } else {
                const letter = /[a-zA-Z]/;
                const number = /[0-9]/;
                if (input.value.length < min || !letter.test(input) || !number.test(input)) {


                    return "Mot de passe au requiert au moins un chiffre ou une lettre";
                } return '';
            }
        } return '';
    } return '';
}

form.addEventListener('submit', (e) => {



    var erreurLogin = checkfield(login);
    if (erreurLogin !== '') {
        e.preventDefault();
        login.className = 'erreur';
        const small = login.parentElement.getElementsByTagName('small')[0];
        small.innerText = erreurLogin;
        small.style.visibility = 'visible';
    }
    var erreurPassword = checkfield(password);
    if (erreurPassword !== '') {
        e.preventDefault();
        password.className = 'erreur';
        const small = password.parentElement.getElementsByTagName('small')[0];
        small.innerText = erreurPassword;
        small.style.visibility = 'visible';
    }

});

