 
// const form = document.getElementById('form');
// const login = document.getElementById('login');
// const password = document.getElementById('password');
// const inscription =document.getElementById('inscription');








// // ---------------------function-----------------------------
// function showError(input, message) {//Afficher les messages d'erreur
//     const malll = input.parentElement;
//     malll.className = 'malll error';
//     const small = malll.querySelector('small');
//     small.innerText = message;
// }
// //
// function showSuccess(input) {
//     const malll = input.parentElement;
//     malll.className = 'malll success'; 
// }
// //
// function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
//     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

//     if (re.test(input.value.trim().toLowerCase())) {
//         showSuccess(input);
//     } else {
//         showError(input,`Email is not valid!`);
//     }
// }
// //
// function checkRequired(inputArray) {// Tester si les champs ne sont pas vides
//     inputArray.forEach(input => {
//         if (input.value.trim() === '') {
//             showError(input,`${getFieldName(input)} is required`);
//         }else{
//             showSuccess(input);
//         }
//     });
// }
// function checkLength(input, min, max) {//Tester la longueur de la valeur  d'un input
//     if(input.value.length < min){
//         showError(input, `${getFieldName(input)} must be at least ${min} characters!`)
//     }else if(input.value.length > max){
//         showError(input, `${getFieldName(input)} must be less than ${max} characters !`);
//     }else{
//         showSuccess(input);
//     }
// }
// function checkPasswordMatch(input1, input2) {
//     if (input1.value !== input2.value) {
//         showError(input2, 'Passwords do not match!');
//     }
// }
// // --------------------Events------------

// inscription.addEventListener('click',function(e){
//     // e.preventDefault();//Bloquer la soumission du formulaire
//     alert('ok');
    

//     checkRequired([ login, password]);

//     // checkLength(login, 3, 15);
//     // checkLength(password, 6, 25);
//     checkEmail(login);
//     // checkPasswordMatch(password,password2);
// })
