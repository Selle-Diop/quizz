<!-- Qui permet de charger les controllers -->
<?php
if (isset($_REQUEST['controller'])) { 
    switch ($_REQUEST['controller']) {
        case "securite":
            require_once(PATH_SRC."controllers/securite.controllers.php");
            break;

        case "user" :
            require_once(PATH_SRC."controllers/users.controllers.php");
            break;
            default :
            echo "ce controller n'existe pas";
            break;
            
        
       
    }
   
}
else {
    require_once(PATH_SRC."controllers/securite.controllers.php");
    
}
