<!-- toutes les constantes du projet -->
<?php

define("ROOT" ,str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
/* constantes pour les chemins du dossier
qui contient model et controlleur */

define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);

// constantes pour les chemins des views

define("PATH_VIEWS",ROOT."views".DIRECTORY_SEPARATOR);

// chemin pour les fichiers json
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");
// chemin pour l'envoi des requetes Get ou Post
define("WEB_ROOT","http://localhost:80/");
define("KEY_ERRORS","errors");
define("KEY_USER_CONNECT","user-connect");
