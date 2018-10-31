<?php
	include 'bddconnect.php';
	if (isset($_POST['sigin'])) {
        $username = htmlspecialchars($_POST['firstname'].' '.$_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
		$email = htmlspecialchars($_POST['email']);
		$password = str_shuffle("Aime@Malaika!");
        $daterg = date("d/F/Y");
        $check = $con->prepare("SELECT * FROM `admins` WHERE `email` = ?");
        $check->execute(array($email));
        $checkexist = $check->rowCount();
        if($checkexist == 0){
            if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
                $tailleMax = 5097152;
                $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
                if($_FILES['avatar']['size'] <= $tailleMax) {
                   $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                   if(in_array($extensionUpload, $extensionsValides)) {
                      $chemin = "avatars/".$_POST['lastname'].".".$extensionUpload;
                      $imgname = htmlspecialchars($_POST['lastname'].".".$extensionUpload);
                      $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                      if($resultat) {
                        $isert = $con->prepare("INSERT INTO `admins`(`firstname`,`lastname`, `email`, `avatar`, `password`, `date_time`) VALUES (?,?,?,?,?,?)");
                        $isert ->execute(array($firstname,$lastname,$email,$imgname,sha1($password),$daterg));
                        require 'PhpMailer/PHPMailerAutoload.php';
    
                            $mail = new PHPMailer;
                            $mail->SMTPDebug = 0;                               // Enable verbose debug output
                            $mail->isSMTP();                                      // Set mailer to use SMTP
                            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                            $mail->SMTPAuth = true;                               // Enable SMTP authentication
                            $mail->Username = 'acontrol08@gmail.com';                 // SMTP username
                            $mail->Password = 'aime1995';                           // SMTP password
                            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                            $mail->Port = 587;                                    // TCP port to connect to
                            $mail->setFrom('acontrol08@gmail.com', 'Africa News Agency');
                            $mail->addAddress($email, $username);     // Add a recipient
                            $mail->addReplyTo('acontrol08@gmail.com', 'Administrator');
                            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = 'Credential of admin panel';
                            $mail->Body    = '
                                                <html>
                                                    <body>
                                                        <div align="center">
                                                            <p style="font-size: 20px;font-family: cursive;">Dear user<br>Welcome <br>Your username and password:</p>
                    
                                                            <ul>
                                                                <li style="font-size: 14px;font-style:bold;">Full Name:  "'.$username.'"</li>
                                                                <li style="font-size: 14px;font-style:bold;">Email :  "'.$email.'" </li> 
                                                                <li style="font-size: 14px;font-style:bold;">Password:  "'.$password.'" </li>
                                                            </ul>
                                                            <br />
                                                            <p>Please contact us if this message is an accident</p>
                                                            <p>Thank you for being part of us.</p>
                                                            <p>Powered by malaika</p>
                                                            <img src="https://amutangana.com/images/courses/line.jpg"/>
                                                        </div>
                                                    </body>
                                                </html>
                                            ';
                            if(!$mail->send()) {
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
            $msg = "Registration faild, ".ucwords($username)." already exist with this email";
        }
    }
    if (isset($_POST['update'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
		$email = htmlspecialchars($_POST['email']);
        $daterg = date("d/F/Y");
        $check = $con->prepare("SELECT * FROM `admins` WHERE `email` = ?");
        $check->execute(array($_SESSION['email']));
        $checkexist = $check->rowCount();
        if($checkexist == 1){
            $isert = $con->prepare("UPDATE `admins` SET `firstname`= ?,`lastname` = ?, `email`= ? ,`date_time`= ? WHERE `email` =?");
            $isert ->execute(array($firstname,$lastname,$email,$daterg,$_SESSION['email']));
            if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
                $tailleMax = 5097152;
                $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
                if($_FILES['avatar']['size'] <= $tailleMax) {
                   $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                   if(in_array($extensionUpload, $extensionsValides)) {
                      $chemin = "avatars/".$_POST['lastname'].".".$extensionUpload;
                      $imgname = htmlspecialchars($_POST['lastname'].".".$extensionUpload);
                      $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                      if($resultat) {
                        $isert = $con->prepare("UPDATE `admins` SET `avatar`=? WHERE `email` =?");
                        $isert ->execute(array($imgname,$_SESSION['email']));
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
            $msg = "Update faild, ".ucwords($username)." doesn't exist with this email";
        }

        $_SESSION['ok'] = "Information changed successfully.";
                        header('Location: login');
    }
?>