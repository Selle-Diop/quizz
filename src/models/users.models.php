<?php
function find_user__password($login,$password)
{
    $users=json_to_array("users");
    foreach ($users as $user) {
        if ($user['login']==$login && $user['password']==$password) {
            return $user;
        }
    }
    return [];
}