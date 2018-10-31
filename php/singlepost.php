<?php
function dispone($numpost){
    global $unique;
    include 'bddconnect.php';
    $unique = $con->prepare("SELECT * FROM `post` WHERE `id` = ?");
    $unique->execute(array($numpost));
}

if(isset($_GET['id'])){
 
}else{
    header('Location: single?id=2');
}