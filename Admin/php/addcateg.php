<?php

    include 'bddconnect.php';

        $alcateg = $con->query("SELECT * FROM `categories`");
    if(isset($_POST['categ'])){
        $catname = htmlspecialchars(strtolower($_POST['catname']));
        $catlink = strtolower(str_replace(' ','',$catname));
        $today = date("Y-m-d");

        $ins = $con->prepare("INSERT INTO `categories`(`category`, `category_link`, `date_time`) VALUES (?,?,?)");
        $ins->execute(array($catname,$catlink,$today));
        $msg = "Added successfully";
    }
    