<?php
 include 'modele/modele.php';
$navs = getPosts();


function about()
{
    $navs = getPosts();
    require('view/pages/about/about.php');
}