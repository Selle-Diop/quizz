<!-- Toutes les fonctions de validation cote back -->
<?php
function Champ_Obligatoire(string $key,$data,array $errors,string $message="ce champ est obligatoire")
{
    if (empty($data))
    {
        $errors[$key]=$message;
    }
}
function Valid_Email (string $key,$data,array $errors,string $message="ce champ est obligatoire")
{ 
if (!filter_var($data,FILTER_VALIDATE_EMAIL)) {
    $errors[$key]=$message;
}
}
// function Valid_Password (string $key,$data,array $errors,string $message="ce champ est obligatoire"){ 
    
// }
