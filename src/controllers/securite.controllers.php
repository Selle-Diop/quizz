<!-- gere les connexions et deconnexions -->
<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."users.models.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="connexion") {
            // echo "traiter le formulaire de conexion";

            $login=$_POST['login'];
            $password=$_POST['password'];
        }
    }
}
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="connexion") {
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");

            // echo "charger la page de connexion";
        }
    }
    else {
        echo "charger la page de connexion";
        
    }

    
}
function connexion($login,$password)
{
   $errors=[];
   Champ_Obligatoire('login',$login,$errors,"login est obligatoire");
    if(count($errors==0)) {
        Valid_Email ('login',$login,$errors);
    }
   Champ_Obligatoire('password',$login,$errors);
   if(count($errors==0)) {
    // appel d'une function model
    $user=find_user__password($login,$password);
    if (count(user)!=0) {
        // utilisateur existe
        $_SESSION[KEY_USER_CONNECT]=$user;  
        header("location".WEB_ROOT."?controller=user&action=accueil");
        exit(); 
    }else{
        // utilisateur n'existe pas
        $errors['connexion']="login ou Mot de passe incorrect";
        $_SESSION[KEY_ERRORS]=$errors;
        header("location".WEB_ROOT);
        exit();
    }
    
}else {
    $_SESSION[KEY_ERRORS]=$errors;
    header("location".WEB_ROOT);
    exit();
}
    
}

