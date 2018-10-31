<?php
    $selectName = $con->prepare("SELECT * FROM `categories` WHERE `category_link`= ?");
    $selectName->execute(array($_GET['id']));
    $selectName = $selectName->fetch();

    $totalparpage = 8;

    $sol = $con->prepare("SELECT * FROM `post` WHERE `category_name` = ?");
    $sol->execute(array($_GET['id']));
    $solcount = $sol->rowCount();

    $pagesTotales = ceil($solcount/$totalparpage);

    if(!empty($_GET['page']) AND $_GET['page']>0 AND $_GET['page']<$pagesTotales) {
        $_GET['page'] = intval($_GET['page']);
        $pageCourante = $_GET['page'];
     } else {
        $pageCourante = 1;
     }
     $depart = ($pageCourante-1)*$totalparpage;

    $sel = $con->prepare('SELECT * FROM `post` WHERE `category_name` = ? ORDER BY id DESC LIMIT '.$depart.','.$totalparpage);
    $sel->execute(array($_GET['id']));
    $selcount = $sel->rowCount();
?>