<?php 
session_start();
include 'bddconnect.php';
 if (isset($_POST['forget'])) {
    if (!empty($_POST['username'])) {
 	
    $username = htmlspecialchars(trim($_POST['username']));
    $password = str_shuffle("Aime@Malaika!");
	$connexion = $con->prepare('SELECT * FROM `admins` WHERE `email`=?');
	$connexion->execute(array($username));
	$userexist =$connexion->rowCount();
    echo $username;
		if($userexist == 1){
            $isert = $con->prepare("UPDATE `admins` SET `password`=? WHERE `email`=?");
            $isert ->execute(array(sha1($password),$username));
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
                            $mail->Subject = 'Password Reset';
                            $mail->Body    = '
                                                <html>
                                                    <body>
                                                        <div align="center">
                                                            <p style="font-size: 20px;font-family: cursive;">Dear user<br>Welcome <br>Your username and password:</p>
                    
                                                            <ul>
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
           $_SESSION['ok'] = "Passord Recovered check your emails";
           header('Location: ../login');
   }else{
   		$error= "you must fill all field!";
   }
 }
}
?>