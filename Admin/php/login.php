<?php 
include 'bddconnect.php';
 if (isset($_POST['login'])) {
 if (!empty($_POST['username']) AND !empty($_POST['password'])) {
 	
	$username = htmlspecialchars(trim($_POST['username']));
	$password = sha1($_POST['password']);
	$connexion = $con->prepare('SELECT * FROM `admins` WHERE `email`=? AND `password`=?');
	$connexion->execute(array($username, $password));
	$userexist =$connexion->rowCount();

		if($userexist == 1){
			$userinfo =$connexion->fetch();
				if (isset($_POST['rememberme'])) {
	                setcookie('username',$userinfo, time()+360*24, null, null, false, true);
	        		setcookie('password',$password, time()+360*24, null, null, false, true);
	        	}
	        		$_SESSION['email']= $userinfo['email'];
					$_SESSION['names']= $userinfo['lastname'];
					header('Location: index');		
		}else{
			$error= " incorrect username or password !";
		}
   }else{
   		$error= "you must fill all field!";
   }
}

?>