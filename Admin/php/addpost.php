<?php
    include 'bddconnect.php';
    $categ = $con->query("SELECT * FROM `categories`");
    
if(isset($_POST['publish'])){
    if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['category'])){
        $title = htmlspecialchars($_POST['title']);
        $auteur = htmlspecialchars($_POST['auteur']);
        $content = $_POST['content'];
        $category = htmlspecialchars($_POST['category']);
        $tag1 = htmlspecialchars($_POST['tag1']);
        $tag2 = htmlspecialchars($_POST['tag2']);
        $tag3 = htmlspecialchars($_POST['tag3']);
        $_POST['lastname'] = str_replace(' ','-',$title);
        $datepost = date("F, dS Y");
        if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
            $tailleMax = 5097152;
            $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
            if($_FILES['avatar']['size'] <= $tailleMax) {
               $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
               if(in_array($extensionUpload, $extensionsValides)) {
                  $chemin = "../images/".$_POST['lastname'].".".$extensionUpload;
                  $imgname = htmlspecialchars($_POST['lastname'].".".$extensionUpload);
                  $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                  if($resultat) {
                    $postnew = $con->prepare("INSERT INTO `post`(`category_name`, `date_time`, `post_title`, `post_content`, `auteur`) VALUES (?,?,?,?,?)");
                    $postnew->execute(array($category,$datepost,$title,$content,$auteur));
                    $don = $con->query("SELECT * FROM `post` ORDER BY id DESC LIMIT 0,1");
                    $don = $don->fetch();
                    $imp =  $con->prepare("INSERT INTO `post_cover`(`guid`, `post_parent`) VALUES (?,?)");
                    $imp->execute(array($don['id']));
                    $postid = ($con->query("SELECT * FROM `post`"))->rowCount();
                    if(!empty($tag1)){
                        $addtag = $con->prepare("INSERT INTO `post_tags`(`id_post`, `tags`, `date_time`) VALUES (?,?,?)");
                        $addtag->execute(array($postid,$tag1,$datepost));
                    }
                    if(!empty($tag2)){
                        $addtag = $con->prepare("INSERT INTO `post_tags`(`id_post`, `tags`, `date_time`) VALUES (?,?,?)");
                        $addtag->execute(array($postid,$tag2,$datepost));
                    }
                    if(!empty($tag3)){
                        $addtag = $con->prepare("INSERT INTO `post_tags`(`id_post`, `tags`, `date_time`) VALUES (?,?,?)");
                        $addtag->execute(array($postid,$tag3,$datepost));
                    }
                    $success = "Registration successful";
                  } else {
                     $msg = "Error while uploading your profile picture";
                  }
               } else {
                  $msg = "The profile picture should be jpg, jpeg, gif or png";
               }
            } else {
               $msg = "Your profile picture should not exceed 5 MB";
            }
         }
    
    }else{
        $msg = "All fied are required";
    }
}
if(isset($_POST['draft'])){


    echo "draft";
    
    }
    