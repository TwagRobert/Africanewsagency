<?php

$sol = $con->query("SELECT * FROM `post`");
$solcount = $sol->rowCount();

$totalparpage = 29;

$pagesTotales = ceil($solcount/$totalparpage);

if(!empty($_GET['numero']) AND $_GET['numero']>0) {
    $_GET['numero'] = intval($_GET['numero']);
    $pageCourante = $_GET['numero'];
 } else {
    $pageCourante = 1;
 }

 $depart = ($pageCourante-1)*$totalparpage;

 $solu = $con->query('SELECT * FROM `post` ORDER BY id DESC LIMIT '.$depart.','.$totalparpage);