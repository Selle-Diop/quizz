<!-- Change les formats de donnees -->
<?php
$json=file_get_contents(PATH_DB);
$arr=json_decode($json,true);
// var_dump($arr);die;

function json_to_array(string $key):array{
    $json=file_get_contents(PATH_DB);
    $arr=json_decode($json,true);
    return $arr[$key];

}
// Enregistrement et mise a jour des donnees du fichier
function array_to_json(string $key,array $arr):array
{
    return [];
}