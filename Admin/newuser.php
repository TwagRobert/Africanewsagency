<?php
    session_start();
    include 'php/auth.php';
    include 'php/newuser.php';
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
            <div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-3 main">
                <h1 class="page-header">New USer &nbsp&nbsp&nbsp /&nbsp&nbsp&nbsp Edit profil</h1>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <h4 class="sec_h">Name </h4>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">First Name</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="firstname" class="form-control sqr_border" <?php if(isset($_GET['id'])){?> value="<?=$all['firstname']?>" <?php } ?> type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Last Name</label>
                        </div>
                        <div class="col-sm-8">
                            <input name="lastname" class="form-control sqr_border" <?php if(isset($_GET['id'])){?> value="<?=$all['lastname']?>" <?php } ?> type="text">
                        </div>
                    </div>
                    <h4 class="sec_h">Contact Info</h4>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Email <span class="text-danger">* </span></label>
                        </div>
                        <div class="col-sm-8">
                            <input name="email" class="form-control sqr_border" <?php if(isset($_GET['id'])){?> value="<?=$all['email']?>" <?php } ?> type="email">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Profile Picture<span class="text-danger">* </span></label>
                        </div>
                        <div class="col-sm-8">
                            <input id="avatar" type="file" name="avatar">
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button class="btn btn-primary" name="sigin" type="submit">Create Profile</button>
                            &nbsp&nbsp&nbsp&nbsp
                            <button class="btn btn-primary" name="update" type="submit">Update Profile</button>
                        </div>
                    </div>
                </form>
                <?php
                if(isset($msg)){?>
                    <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> <?=$msg?>.
                    </div>
                <?php }elseif(isset($success)){?>
                    <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?=$success?>.
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>