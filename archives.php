<?php
    include 'php/bddconnect.php';
    include 'php/archive.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <base href="/Africanewsagency/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa News Agency | Archives</title>
    <link rel="shortcut icon" href="http://africane.cluster013.ovh.net/fr/wp-content/themes/trendyblog-theme/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
</head>

<body>
    <?php include 'header.php'?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="page_title_container">
                    <h2 class="page_title">ARCHIVES </h2></div>
                <div class="relative_position">
                    <div class="archive_box relative_position">
                    <?php while($aff = $solu->fetch()){?>
                        <div class="archive_div">
                            <h3> <a href="<?=$aff['id']?>/<?=str_replace(' ','-',$aff['post_title'])?>"><?=$aff['post_title']?> </a></h3>
                            <p class="meta">By <span><?=$aff['auteur']?> </span> On <span><?=$aff['date_time']?></span></p>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="relative_position">
                    <div class="relative_position"><span class="left pag_controls"> <a href="archives/<?=$_GET['numero']-1?>">Prev </a></span><span class="right pag_controls"> <a href="archives/<?=$_GET['numero']+1?>">Next </a></span>
                    <center>
                        <ul class="list-inline pages pagination">
                        <?php for($i=$_GET['numero'];$i<=($_GET['numero']+10);$i++){?>
                            <li> <a <?php if(isset($_GET['numero'])){ if($_GET['numero']== $i){?>style="background:green"<?php } } ?> href="archives/<?=$i?>"><?=$i?></a></li>
                        <?php } ?>
                        </ul>
                    </center>
                        <div class="clearfix"></div>
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
</body>

</html>