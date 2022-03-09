<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."users.models.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="connexion") {
             echo "traiter le formulaire de conexion";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_REQUEST["action"])) {
    //    if (!is_connect ()) {
        
    //     header("location:".WEB_ROOT);
    //        exit();
    //    } 
        if ($_REQUEST["action"]=="accueil") {
             if (is_admin()){
              liste_des_Joueur();
                
             }
            elseif (is_joueur()) {
                 afficherJoueur();
             }
            
            //  require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
        if($_REQUEST["action"]== "liste.joueur"){
            liste_des_Joueur();
            // lister_lesjoueurs ();
        }
       
        if($_REQUEST["action"]== "liste.question"){
            afficherquestion ();
        }
        if($_REQUEST["action"]== "creation.question"){
             creationquestion();
        }
        if($_REQUEST["action"]== "creation.admin"){
            creationadmin ();
        }
        if($_REQUEST["action"]== "inscription.joueur"){
           /* echo '<pre>';
           var_dump($_POST);
           echo '</pre>';
            die(); */
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
//    $prenom=$_POST['prenom'];   
//    $nom=$_POST['nom'];
//    $login=$_POST['login'];  
//    $password=$_POST['password'];   
//    $password2=$_POST['password2'];           
//     inscription ($prenom,$nom,$login,$password,$password2);
            
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'inscription.html.php');
            
        }
    }


    
}

// ---------------------------------Fonctions-------------------------------------
 
// function lister_lesjoueurs (){
//     //  appel du model
//     $data=find_users(Role_JOUEUR);
//     require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'liste.joueur.html.php');

//  }

function liste_des_Joueur(){
     ob_start();
    $data=find_users(Role_JOUEUR);
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'liste.joueur.html.php');
    $affiche=ob_get_clean();
    require_once (PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');
}
function afficherJoueur(){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'jeu.html.php');
    $affiche=ob_get_clean();
    require_once (PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');
}
function afficherquestion (){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'liste.question.html.php');
    $affiche=ob_get_clean();
    require_once (PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');
    
}
function creationquestion(){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'creation.question.html.php');
    $affiche=ob_get_clean();
    require_once (PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');
    
}
function creationadmin (){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'inscription.html.php');
    $affiche=ob_get_clean();
    require_once (PATH_VIEWS.'user'.DIRECTORY_SEPARATOR.'accueil.html.php');
    
}
function inscription ($prenom,$nom,$login,$password,$password2,$role){
    
 $errors=[];
    checkValue ('prenom',$prenom,$errors);
    checkValue ('nom',$nom,$errors);
    checkValue ('email',$login,$errors);
    checkValue ('password',$password,$errors);
    checkValue ('password2',$password2,$errors);
    matchPassword($password1,$password2,'passwords',$errors);
    if(count($errors==0)){
        $users=find_user__password($login,$password);

        if(count($users==0)){
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
            header('location'.WEB_ROOT.'?controller=user&action=acceuil');

        }
        else{
            $errors['user_exist']= 'utilisateur existe deja';
            header("location:".WEB_ROOT);
        }
    }




}