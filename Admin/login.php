<?php
    session_start();
    include 'php/login.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa News Agency Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <div class="login-card log-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
    <?php if(isset($error)){?>
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> wrong email or password
    </div>
    <?php } ?>
    <?php if(isset($_SESSION['ok'])){?>
    <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>info!</strong> <?=$_SESSION['ok']?>
    </div>
    <?php } ?>
        <p class="profile-name-card"> LOGIN</p>
        <form class="form-signin" method="post"><span class="reauth-email"> </span>
            <input class="form-control" name="username" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail">
            <input class="form-control" name="password" type="password" required="" placeholder="Password" id="inputPassword">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input name="rememberme" type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" name="login" type="submit">Sign in</button>
        </form><a href="#" class="forgot-password">Forgot your password?</a></div>
    <div class="login-card forgot-pass"><img src="assets/img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> Enter Your Email To Recover Your Password</p>

        <form class="form-signin" method="post" action="php/motdepass.php">
        <span class="reauth-email"> </span>
            <input class="form-control" name="username" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail">
            <button class="btn btn-primary btn-block btn-lg btn-signin" name="forget" type="submit">Recover </button>
        </form>
        
        <a href="#" class="forgot-password">Sign in ?</a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>