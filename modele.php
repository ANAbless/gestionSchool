<?php
include_once 'conx.php';
function getPosts(){
    global $bdd;
    $statement  = $bdd->query("SELECT * FROM t_menus");
    $navs = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $navs;
}