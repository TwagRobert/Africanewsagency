<?php
    session_start();
    include 'php/bddconnect.php';
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
            <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main">
                <h1 class="page-header">Videoss </h1>
                <div>
                    <div>
                        <div><a href="newmedia" class="add_new_btn">ADD NEW</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div><br>
                    <!-- <a href="#" class="add_new_btn add_mag_btn">Remove selected image(s)</a> -->
                <div class="row">
                    <div class="col-sm-12">
                        <form>
                        <?php 
                         $sele = $con->query("SELECT * FROM `videos_post` ORDER BY id DESC");
                            while($select = $sele->fetch()){?>
                            <div class="media-img">
                                <div>
                                <iframe class="img-responsive" src="<?=$select['video_name']?>"></iframe>
                                </div>
                            </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>