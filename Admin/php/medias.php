<?php
include 'bddconnect.php';
if(isset($_POST['galeri'])){
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 100097152;
   $username = str_shuffle("AIMEmalaika1995");
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "../gallery/".$username.".".$extensionUpload;
         $imgname = ($username.".".$extensionUpload);
         $dateup = date("F, dS Y");
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
             $Upl = $con->prepare("INSERT INTO `galery`(`image_name`, `date_time`) VALUES (?,?)");
             $Upl->execute(array($imgname,$dateup));
            $msg = "Uploaded successfully";
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}
}
if(isset($_POST['covers'])){
    if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
       $tailleMax = 100097152;
       $username = str_shuffle("AIMEmalaika1995");
       $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
       if($_FILES['avatar']['size'] <= $tailleMax) {
          $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
          if(in_array($extensionUpload, $extensionsValides)) {
             $chemin = "../covers/".$username.".".$extensionUpload;
             $imgname = ($username.".".$extensionUpload);
             $dateup = date("F, dS Y");
             $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
             if($resultat) {
                 $Upl = $con->prepare("INSERT INTO `coversimages`(`cover_name`, `date_time`) VALUES (?,?)");
                 $Upl->execute(array($imgname,$dateup));
                $msg = "Uploaded successfully";
             } else {
                $msg = "Erreur durant l'importation de votre photo de profil";
             }
          } else {
             $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
          }
       } else {
          $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
       }
    }
    }
    if(isset($_POST['banner'])){
        $ending = htmlspecialchars($_POST['dateend']);
        if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
           $tailleMax = 100097152;
           $username = str_shuffle("AIMEmalaika1995");
           $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
           if($_FILES['avatar']['size'] <= $tailleMax) {
              $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
              if(in_array($extensionUpload, $extensionsValides)) {
                 $chemin = "../banniere/".$username.".".$extensionUpload;
                 $imgname = ($username.".".$extensionUpload);
                 $dateup = date("F, dS Y");
                 $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                 if($resultat) {
                     $Upl = $con->prepare("INSERT INTO `banners`(`banner_image`, `end_time`, `date_time`) VALUES (?,?,?)");
                     $Upl->execute(array($imgname,$ending,$dateup));
                    $msg = "Uploaded successfully";
                 } else {
                    $msg = "Erreur durant l'importation de votre photo de profil";
                 }
              } else {
                 $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
              }
           } else {
              $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
           }
        }
        }

        if(isset($_POST['videos'])){
            $link = htmlspecialchars($_POST['link']);
            $title = htmlspecialchars($_POST['title']);
            $descr = htmlspecialchars($_POST['desc']);
            $dateup = date("F, dS Y");
            $link = ('https://www.youtube.com/embed/'.substr($link,32,11));
            $advid = $con->prepare("INSERT INTO `videos_post`(`video_name`, `video_title`,`descr`, `date_time`) VALUES (?,?,?,?)");
            $advid->execute(array($link,$title,$descr,$dateup));
            $msg = "Uploaded successfully";
        }
?>






