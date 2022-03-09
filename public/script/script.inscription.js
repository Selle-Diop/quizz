const forme = document.getElementById("forme");
const aprenom = document.getElementById("aprenom");
const anom = document.getElementById("anom");
const alogin = document.getElementById("alogin");
const apassword1 = document.getElementById("apassword1");
const apassword2 = document.getElementById("apassword2");

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
                if (input.value.length < 6 || !letter.test(input) || !number.test(input)) {

                    return "Mot de passe doit requerir au moins un chiffre ou une lettre";
                } return '';
            }
        } return '';
    } return '';
}
function checkPassword(password1, password2) {
    if (password1 !== password2) {
        return 'mot de passe differents';
    } return '';
}
forme.addEventListener('submit', (e) => {
    var erreurPrenom = checkfield(aprenom);
    if (erreurPrenom !== '') {
        e.preventDefault();
        aprenom.className = 'error';
        const small = aprenom.parentElement.getElementsByTagName('small')[0];
        small.innerText = erreurPrenom;
        small.style.visibility = 'visible';
    }
    var erreurNom = checkfield(anom);
    if (erreurNom !== '') {
        e.preventDefault();
        anom.className = 'error';
        const small = anom.parentElement.getElementsByTagName('small')[0];
        small.innerText = erreurNom;
        small.style.visibility = 'visible';
    }

    var erreurLogin = checkfield(alogin);
    if (erreurLogin !== '') {
        e.preventDefault();
        alogin.className = 'error';
        const small = alogin.parentElement.getElementsByTagName('small')[0];
        small.innerText = erreurLogin;
        small.style.visibility = 'visible';
    }
    var erreurPassword1 = checkfield(apassword1);
    if (erreurPassword1 !== '') {
        e.preventDefault();
        apassword1.className = 'error';
        const small = apassword1.parentElement.getElementsByTagName('small')[0];
        small.innerText = erreurPassword1;
        small.style.visibility = 'visible';
    }

    var erreurPassword2 = checkfield(apassword2);
    if (erreurPassword2 !== '') {
        e.preventDefault();
        apassword2.className = 'error';
        const small = apassword2.parentElement.getElementsByTagName('small')[0];
        small.innerText = erreurPassword2;
        small.style.visibility = 'visible';
    }
    // var Password = checkPassword(apassword1, apassword2);
    // if (password !== '') {
    //     e.preventDefault();
    //     apassword1.className = 'error';
    //     apassword2.className = 'error';
    //     const small = apassword2.parentElement.getElementsByTagName('small')[0];
    //     small.innerText = erreurPassword2;
    //     small.style.visibility = 'visible';


    // }
});



// // //---------------------function--------------------
// function showError(input, message) {//Afficher les messages d'erreur
//     const formControl = input.parentElement;
//     formControl.className = 'form-control error';
//     const small = formControl.querySelector('small');
//     small.innerText = message;
// }
// //
// function showSuccess(input) {
//     const formControl = input.parentElement;
//     formControl.className = 'form-control success';
// }
// function checkRequired(inputArray) {
//     inputArray.forEach(input => {
//         if (input.value.trim() === '') {
//             showError(input, 'ce champ est obligatoire')
//             return false;
//         }
//         else {
//             showSuccess(input);
//             return true;
//         }

//     });
// }
// function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
//     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

//     if (re.test(input.value.trim().toLowerCase())) {
//         showSuccess(input);
//         return true;
//     } else {
//         showError(input, "Email is not valid!");
//         return false;
//     }
// }
// function checkLength(input, min) {//Tester la longueur de la valeur  d'un input
//     const champ = input.value;
//     const letter = /[a-zA-Z]/;
//     const number = /[0-9]/;
//     if (champ.length < min || !letter.test(champ) || !number.test(champ)) {
//         showError(input, "le Password doit contenir au minimun une lettre et un nombre");
//         return false;
//     }
//     else {
//         showSuccess(input);
//         return true;
//     }
// }

// function matchPassword(input1, input2) {
//     if (input1.value !== input2.value) {
//         showError(input, "Les deux mot de passe ne correspondent pas!");
//         return false;
//     }
//     else {
//         return true;
//     }
// }

// //
// forme.addEventListener('submit', function (e) {
//     if (!checkEmail(alogin) || !checkLength(apassword1, 6) || !matchPassword(apassword1, apassword2)) {
//         e.preventDefault();
//         checkRequired([aprenom, anom, alogin, apassword1, apassword2]);
//         checkEmail(alogin);
//         checkLength(apassword1, 6);
//         matchPassword(apassword1, apassword2);
//     }
// })
