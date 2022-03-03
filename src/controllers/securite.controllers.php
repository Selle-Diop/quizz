<!-- gere les connexions et deconnexions -->
<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."users.models.php");

// var_dump($_REQUEST["action"]);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="connexion") {
                // die('ok');
            // echo "traiter le formulaire de conexion";
            $login=$_POST['login'];
            $password=$_POST['password'];
             connexion($login,$password);
        }
        
    }
    
        
    
    
}
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_GET["action"])) {
        if ($_GET["action"]=="connexion") {
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            

            // echo "charger la page de connexion";
        }
    }
    else {
       
        // echo "charger la page de connexion";
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        
    }

    
}
function connexion($login,$password)
{
   $errors=[];
   Champ_Obligatoire('login',$login,$errors,"login est obligatoire");
    if(count($errors)==0) {
        Valid_Email ('login',$login,$errors);
    }
   Champ_Obligatoire('password',$login,$errors);
   if(count($errors)==0) {
    // appel d'une function model
    $user=find_user__password($login,$password);
    if (count($user)!=0) {
       
        // utilisateur existe
        $_SESSION[KEY_USER_CONNECT]=$user;  
        header("location:".WEB_ROOT."?controller=user&action=accueil");
        exit(); 
    }else{
        // utilisateur n'existe pas
        $errors['connexion']="login est obligatoire";
        $errors['password']="password est obligatoire";

        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT."?controller=securite&action=connexion");
        exit();
    }
    
}else {
    $_SESSION[KEY_ERRORS]=$errors;
    header("location".WEB_ROOT);
    exit();
}
    
}

