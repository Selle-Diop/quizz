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
       if (!is_connect ()) {
        
        header("location:".WEB_ROOT);
           exit();
       } 
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