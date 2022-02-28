<!-- Qui permet de charger les controllers -->
<?php
//  var_dump($_REQUEST);
if (isset($_REQUEST['controller'])) {
    switch ($_REQUEST['controller']) {
        case "securite":
            require_once(PATH_SRC."controllers/securite.controllers.php");
            break;

        case "user" :
            require_once(PATH_SRC."controllers/users.controllers.php");
            break;
            default :
            echo "pas de controller";
            break;
            
        
       
    }
   
}
else {
    require_once(PATH_SRC."controllers/securite.controllers.php");
    
}
