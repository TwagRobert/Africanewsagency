<?php
    include 'php/bddconnect.php';
    include 'php/archive.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>africanewsagencytemplate</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/material-design-color-palette.css">
    <link rel="stylesheet" href="assets/css/imagegrid.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
</head>

<body>
    <?php include 'header.php';?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="page_title_container">
                    <h2 class="page_title">Video Gallery</h2></div>
                <div class="relative_position myCard">
                    <div class="center-div">
                    <?php $totvid = $con->query("SELECT * FROM `videos_post`");
                            while($toto = $totvid->fetch()){?>
                        <article class="video">
                            <figure>
                            <?php  $text = $toto['video_name'];?>
                                <a href="<?=$toto['video_name']?>" class="fancybox fancybox.iframe"> <img class="img-responsive videoThumb" src="https://i1.ytimg.com/vi/<?=substr($text,30,11)?>/mqdefault.jpg"></a>
                            </figure>
                            <h2 class="text-center vid-title"><?=substr($toto['video_title'],0,20)?>...</h2></article>
                   <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Newsletter </h4>
                    <div class="widger-content">
                        <p>Subscribe to our newsletter</p>
                        <?php include 'newsletterform.php';?>
                    </div>
                </div>
                <div class="widget">
                    <div class="tab-content">
                        <div class="slider">
                        <a href="image-bank"><img src="gallery/annonce.jpg"></a>
                                <?php include 'gallery_side.php';?>
                        </div>
                        <h2 class="post-title-small"> <a href="image-bank">Subscribe to the gallery </a></h2></div>
                </div>
                <?php include 'video_side.php';?>
                <div class="widget">
                    <div class="tab-content">
                        <div class="slider">
                        <?php include 'covers.php';?>
                        </div>
                        <h2 class="post-title-small"> <a href="#">OUR COVERS</a></h2></div>
                </div>
                <div class="widget">
                    <h1 class="widget-title">in short</h1>
                    <div class="tab-content">
                    <?php $small = $con->query("SELECT * FROM `post` ORDER BY id DESC LIMIT 0,3");
                          while($smallp = $small->fetch()){?>
                        <div class="tab-streams">
                            <h2 class="post-title-small"> <a href="<?=$smallp['id']?>/<?=str_replace(' ','-',$smallp['post_title'])?>"><?=substr($smallp['post_title'],0,250)?></a></h2>
                            <p class="meta"><?=$smallp['date_time']?></p>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <?php include 'parteners.php';?>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
</body>

</html>