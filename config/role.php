<!-- Les autorisations acces -->
<?php
define("Role_ADMIN","Role_ADMIN");
define("Role_JOUEUR","Role_JOUEUR");

function is_connect ():bool{
    return isset($_SESSION[KEY_USER_CONNECT]);
}
function is_admin ():bool{
  return  is_connect () && $_SESSION[KEY_USER_CONNECT]['role']==Role_ADMIN;
}
function is_joueur ():bool{
  return  is_connect () && $_SESSION[KEY_USER_CONNECT]['role']==Role_JOUEUR;
}