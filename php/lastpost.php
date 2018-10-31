<?php
    include 'bddconnect.php';
    //$postlast1 = ($con->query("SELECT * FROM `post`"))->rowCount();
    function lastnews($idselected){
        include 'bddconnect.php';
        global $alllast;
        $alllast = $con->query("SELECT * FROM `post` WHERE `category_name` !='enbref' AND `category_name` !='' ORDER BY id DESC LIMIT $idselected");
       // $alllast->execute(array($idselected));
    }
    
    function lastpost($category,$limit){
        include 'bddconnect.php';
        global $postCount;
        global $selPost;
        $selPost = $con->prepare("SELECT * FROM `post` WHERE `category_name` = ? ORDER BY id DESC LIMIT $limit");
        $selPost->execute(array($category));
        $postCount = $selPost->rowCount();
    }
?>