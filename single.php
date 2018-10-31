<?php
    include 'php/bddconnect.php';
    include 'php/singlepost.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa News Agency | Topic</title>
    <link rel="shortcut icon" href="http://africane.cluster013.ovh.net/fr/wp-content/themes/trendyblog-theme/images/favicon.ico" type="image/x-icon">
    <base href="/Africanewsagency/single">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
</head>

<body>
    <?php
        dispone($_GET['id']);
        $element = $unique->fetch();
        $taggs = $con->prepare("SELECT * FROM `post_tags` WHERE `id_post` = ?");
        $taggs->execute(array($_GET['id']));
        $lok = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
		$lok->execute(array($_GET['id']));
		$lokv = $lok->fetch();
    ?>
    <?php include 'header.php';?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="relative_position">
                    <div class="relative_position">
                        <div class="page_news_header">
                            <h2> <a><?=$element['post_title']?> </a></h2>
                            <p class="meta">By <span><?=$element['auteur']?> </span> On <span><?=$element['date_time']?></span></p>
                        </div>
                        <div class="page_news_content"><img src="Admin/coverspost/<?=$lokv['guid']?>">
                        <?=$element['post_content']?>
                        </div>
                    </div>
                    <div class="tag_div relative_position"><span class="left"> <i class="fa fa-tag"></i> Tags:&nbsp; </span>
                        <ul class="list-inline tag_list">
                        <?php
                            while($taglist = $taggs->fetch()){?>
                            <li><?=$taglist['tags'] ?></li>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="share_div relative_position">
                        <h4><i class="fa fa-share-alt"></i> Share this story</h4>
                        <ul class="list-inline">
                            <li>
                                <a href="#"> <i class="fa fa-envelope-o"></i></a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative_position">
                    <div class="relative_position">
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="position:relative;">
                        <h1 class="category_title">Related post</h1>
                        <div class="row" style="margin:inherit;">
                        <?php
                            $relunique = $con->prepare("SELECT * FROM `post` WHERE `category_name` = ? ORDER BY id DESC LIMIT 0,4");
                            $relunique->execute(array($element['category_name']));
                            while($related = $relunique->fetch()){
                                $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                $couve->execute(array($related['id']));
                                $couvev = $couve->fetch();
                        ?>
                            <div class="col-md-3 col-sm-6 nopad_nomag category_content">
                                <p><?=$related['date_time']?></p><img class="img-responsive" src="Admin/coverspost/<?=$couvev['guid']?>">
                                <h1> <a href="<?=$related['id']?>/<?=str_replace(' ','-',$related['post_title'])?>"><?= substr($related['post_title'],0,20)?>...</a></h1></div>
                        <?php } ?>
                        </div>
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
    <?php
        include 'footer.php';
    ?>