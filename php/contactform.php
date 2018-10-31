<?php
    if(isset($_POST['send'])){
        if(!empty($_POST['email']) AND !empty($_POST['names']) AND !empty($_POST['content'])){
            $name = @trim(stripslashes($_POST['names'])); 
            $email = @trim(stripslashes($_POST['email'])); 
            $subject = "contact Form"; 
            $message = @trim(stripslashes($_POST['content'])); 

            $email_from = $email;
            $email_to = 'aimemalaika1995@gmail.com';//replace with your email amutangana@klab.rw

            $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

            $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
        }else{
            $msg = "Fill all field !";
        }
    }