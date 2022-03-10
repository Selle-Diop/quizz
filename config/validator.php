<!-- Toutes les fonctions de validation cote back -->

<?php
function Champ_Obligatoire(string $key,$data,array &$errors,string $message="ce champ est obligatoire"):void
{
    if (empty($data))
    {
        $errors[$key]=$message;
    }
}
function Valid_Email (string $key,$data,array &$errors,string $message="ce champ est obligatoire")
{ 
if (!filter_var($data,FILTER_VALIDATE_EMAIL)) {
    $errors[$key]=$message;
}
}
function Valid_Password (string $key,$data,array &$errors,string $message="ce champ est obligatoire"){ 
    if (strlen($data) < 6){
        $errors[$key]=$message;
    }
    
}
// -----------------functioninscription------------
function checkValue ($key,$data,array &$errors){
    if($data==''){
        $errors[$key]='champ obligatoire';
    }else{
        if($key=='email'){
            if (!filter_var($data,FILTER_VALIDATE_EMAIL)) {
    $errors[$key]='email pas valide';
    } if($key=='password'){
    if(strlen($data)<6){
    $errors[$key]='password required au min 6';

    }
} 


        }
    }
}
function matchPassword ($password1,$password2,$key,array &$errors){
if($password1 !=='' && $password2 !=='' ){
    if($password1 !== $password2){
        $errors[$key]= 'les mots de passent sont differents';
    }

}
}

function uploadimage($input){

}
