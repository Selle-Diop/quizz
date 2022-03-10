<!-- gere les connexions et deconnexions -->
<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."users.models.php");

// var_dump($_REQUEST["action"]);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST["action"])) {
        // die('ok');
        if ($_POST["action"]=="connexion") {
            // echo "traiter le formulaire de conexion";
            $login=$_POST['login'];
            $password=$_POST['password'];
             connexion($login,$password);
             
        }
        elseif ($_POST["action"]=="inscription.joueur"){

            $prenom=$_POST['prenom'];   
          $nom=$_POST['nom'];
       $login=$_POST['login'];  
     $password=$_POST['password'];   
     $password2=$_POST['password2']; 
     $role=Role_JOUEUR;
     if(is_admin()) $role=Role_ADMIN; 

       inscription($prenom,$nom,$login,$password,$password2,$role);

        }

        
    }
    
}
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_GET["action"])) {
        if ($_GET["action"]=="connexion") {
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            

            // echo "charger la page de connexion";
        }
        // action=deconnexion
        elseif ($_GET["action"]=="deconnexion") {
            logout();
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
    
   Champ_Obligatoire('password',$password,$errors,"Password est obligatoire");
   if(count($errors)==0) {
    // Valid_Password('password',$password,$errors,"veuillez saisir un password de plus 6 chiffres");
            // appel d'une function model
            $user=find_user__password($login,$password);
            if (count($user)!=0) {
           
                // utilisateur existe
                $_SESSION[KEY_USER_CONNECT]=$user;  
                header("location:".WEB_ROOT."?controller=user&action=accueil");
                exit(); 
            }else{
                // utilisateur n'existe pas
                $errors['connexion']="Verifier login ou Mot de passe";
                


                $_SESSION[KEY_ERRORS]=$errors;
                header("location:".WEB_ROOT."?controller=securite&action=connexion");
                exit();
            }
    
        }else {
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit();
        }
    
}
function inscription ($prenom,$nom,$login,$password,$password2,$role){
    
 $errors=[];
   Champ_Obligatoire ('prenom',$prenom,$errors);
   Champ_Obligatoire ('nom',$nom,$errors);
   Champ_Obligatoire ('email',$login,$errors);
   Champ_Obligatoire ('password',$password,$errors);
   Champ_Obligatoire ('password2',$password2,$errors);
    matchPassword($password,$password2,'passwords',$errors);
     if(find_user__login($login)){
         $errors['erreurlogin']='cet utilisateur existe deja';
        //  die('ok');
         }
         
    if(count($errors)==0){
        $users=find_user__password($login,$password);
        if (is_admin()) {
            header('location:'.WEB_ROOT.'?controller=user&action=accueil');
            exit();
        }
        

        if(count($users)==0){
            $score=0;
            $newUsers=array(
            "Nom"=> $nom,
            "Prenom"=>$prenom,
            "password"=>$password,
            "login" =>$login,
            "role"=>$role,
            "Score"=> $score,


            );
            
            array_to_json('users',$newUsers);
            $_SESSION[KEY_USER_CONNECT]=$newUsers;
            //  var_dump($_SESSION[KEY_USER_CONNECT]);
            header('location:'.WEB_ROOT.'?controller=securite&action=connexion');
            exit();            

        }
        else{
            // echo 'ok';die();
            $_SESSION[KEY_ERRORS]=$errors;
            
            header('location:'.WEB_ROOT.'?controller=user&action=inscription.joueur');
            exit();
        }
    }else {
            $_SESSION[KEY_ERRORS]=$errors;
            header('location:'.WEB_ROOT.'?controller=user&action=inscription.joueur');
            exit();
        
    }




}


function logout(){
    session_destroy ();
    unset($_SESSION[KEY_ERRORS]);
    header("location:".WEB_ROOT);

    exit();
}



