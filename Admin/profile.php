<?php
    session_start();
    include 'php/bddconnect.php';
    include 'php/auth.php';
    $info = $con->prepare("SELECT * FROM `admins` WHERE `email` = ?");
    $info->execute(array($_SESSION['email']));
    $all = $info->fetch();
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
    <?php include 'top.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php include 'navig.php';?>
            <div class="col-md-7 col-md-offset-2 col-sm-6 col-sm-offset-3 main">
                <h1 class="page-header">Profile </h1>
                <form class="form-horizontal">
                    <h4 class="sec_h">Name </h4>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">First Name</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control sqr_border" type="text" value="<?=$all['firstname']?>" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Last Name</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control sqr_border" type="text" value="<?=$all['lastname']?>" disabled="">
                        </div>
                    </div>
                    <h4 class="sec_h">Contact Info</h4>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Email <span class="text-danger">* </span></label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control sqr_border" type="email" value="<?=$all['email']?>" disabled="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3 main">
                <div><img class="img-responsive" src="avatars/<?=$all['avatar']?>"></div>
                <p class="edit_profile_btn"><a href="newuser?id=edit">Edit Profile</a></p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>