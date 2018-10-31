<?php
    include 'php/bddconnect.php';
    include 'php/lastpost.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa News Agency | Home</title>
    <base href="/Africanewsagency/">
    <link rel="shortcut icon" href="http://africane.cluster013.ovh.net/fr/wp-content/themes/trendyblog-theme/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
</head>

<body>
    <?php include 'header.php';include 'banner.php';?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <h2 class="top-news-header">Latest News</h2>
                <div class="top-news-content">
                    <div class="row nopad_nomag">
                        <?php
                        lastnews('0,1');
                        $alast = $alllast->fetch();
                        $type = $con->prepare("SELECT * FROM `categories` WHERE `category_link` = ?");
                        $type->execute(array($alast['category_name']));
                        $name = $type->fetch();
                        $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                        $couve->execute(array($alast['id']));
                        $couvev = $couve->fetch();
                        ?>
                        <div class="col-md-6 nopad_nomag">
                            <div class="media">
                                <div class="media_image">
                                    <div class="responsive-image">
                                        <div><img src="Admin/coverspost/<?=$couvev['guid']?>"></div>
                                    </div>
                                </div>
                                <div class="media_content">
                                    <h3 class="media_title"> <a href="#" class="media_link"><?=substr($alast['post_title'],0,40) ?></a></h3>
                                    <p class="media_summary"><?=substr($alast['post_content'],0,240) ?></p><a href="#" class="media_tag">News </a></div>
                                    <a href="<?=$alast['id']?>/<?=str_replace(' ','-',$alast['post_title'])?>" class="overlay_link"> </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 nopad_nomag">
                            <div class="media">
                                <div class="media_image">
                                <?php
                                    lastnews('1,2');
                                    $alast = $alllast->fetch();
                                    $type = $con->prepare("SELECT * FROM `categories` WHERE `category_link` = ?");
                                    $type->execute(array($alast['category_name']));
                                    $name = $type->fetch();
                                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                    $couve->execute(array($alast['id']));
                                    $couvev = $couve->fetch();
                                ?>
                                    <div class="responsive-image">
                                        <div><img src="Admin/coverspost/<?=$couvev['guid']?>"></div>
                                    </div>
                                </div>
                                <div class="media_content">
                                    <h3 class="media_title"> <a href="#" class="media_link"><?=substr($alast['post_title'],0,40) ?></a></h3><a href="#" class="media_tag"><?=$name['category']?> </a></div>
                                <a href="<?=$alast['id']?>/<?=str_replace(' ','-',$alast['post_title'])?>" class="overlay_link"> </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 nopad_nomag">
                            <div class="media">
                                <div class="media_image">
                                    <div class="responsive-image">
                                    <?php
                                        lastnews('2,3');
                                        $alast = $alllast->fetch();
                                        $type = $con->prepare("SELECT * FROM `categories` WHERE `category_link` = ?");
                                        $type->execute(array($alast['category_name']));
                                        $name = $type->fetch();
                                        $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                        $couve->execute(array($alast['id']));
                                        $couvev = $couve->fetch();
                                        ?>
                                        <div><img src="Admin/coverspost/<?=$couvev['guid']?>"></div>
                                    </div>
                                </div>
                                <div class="media_content">
                                    <h3 class="media_title"> <a href="#" class="media_link"><?=substr($alast['post_title'],0,40) ?></a></h3><a href="#" class="media_tag"><?=$name['category']?> </a></div>
                                <a href="<?=$alast['id']?>/<?=str_replace(' ','-',$alast['post_title'])?>" class="overlay_link"> </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 nopad_nomag">
                            <div class="media">
                                <div class="media_image">
                                    <div class="responsive-image">
                                    <?php
                                        lastnews('3,4');
                                        $alast = $alllast->fetch();
                                        $type = $con->prepare("SELECT * FROM `categories` WHERE `category_link` = ?");
                                        $type->execute(array($alast['category_name']));
                                        $name = $type->fetch();
                                        $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                        $couve->execute(array($alast['id']));
                                        $couvev = $couve->fetch();
                                    ?>
                                        <div><img src="Admin/coverspost/<?=$couvev['guid']?>"></div>
                                    </div>
                                </div>
                                <div class="media_content">
                                    <h3 class="media_title"> <a href="#" class="media_link"><?=substr($alast['post_title'],0,40) ?></a></h3><a href="#" class="media_tag"><?=$name['category']?> </a></div>
                                <a href="<?=$alast['id']?>/<?=str_replace(' ','-',$alast['post_title'])?>" class="overlay_link"> </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 nopad_nomag">
                            <div class="media">
                                <div class="media_image">
                                    <div class="responsive-image">
                                    <?php
                                        lastnews('4,5');
                                        $alast = $alllast->fetch();
                                        $type = $con->prepare("SELECT * FROM `categories` WHERE `category_link` = ?");
                                        $type->execute(array($alast['category_name']));
                                        $name = $type->fetch();
										
                                    ?>
                                        <div><img src="Admin/coverspost/<?=$couvev['guid']?>"></div>
                                    </div>
                                </div>
                                <div class="media_content">
                                    <h3 class="media_title"> <a href="#" class="media_link"><?=substr($alast['post_title'],0,40) ?></a></h3><a href="#" class="media_tag"> <?=$name['category']?></a></div>
                                <a href="<?=$alast['id']?>/<?=str_replace(' ','-',$alast['post_title'])?>" class="overlay_link"> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" style="position:relative;">
                        <h1 class="category_title">News <a href="category/News/1" class="news_more">More </a></h1>
                        <div class="row" style="margin:inherit;">
                        <?php 
                            lastpost('news','0,3');
                            if($postCount>0){
                                while($selP = $selPost->fetch()){
                                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                    $couve->execute(array($selP['id']));
                                    $couvev = $couve->fetch();    
                                ?>
                                <div class="col-md-4 col-sm-6 nopad_nomag category_content">
                                <p><?=$selP['date_time']?></p><img class="img-responsive" src="Admin/coverspost/<?=$couvev['guid']?>">
                                <h1> <a href="<?=$selP['id']?>/<?=str_replace(' ','-',$selP['post_title'])?>"><?=substr($selP['post_title'],0,15) ?>...</a></h1></div>
                        <?php   }
                            }else{?>
                            <div class="col-md-4 col-sm-6 nopad_nomag category_content">
                                <h1> <a style="text-align:center;color:red;margin-top:70px">No post found &nbsp; </a></h1></div>
                        <?php } ?>
                            
                        </div>
                    </div>
                    <div class="col-md-4" style="position:relative;">
                        <h1 class="category_title report_title">report of the month</h1>
                        <div class="row" style="margin:inherit;">
                        <?php 
                            lastpost('ReportoftheMonth','0,1');
                            if($postCount>0){
                                while($selP = $selPost->fetch()){
                                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                    $couve->execute(array($selP['id']));
                                    $couvev = $couve->fetch();    
                                ?>
                                <div class="col-sm-12 nopad_nomag category_content">
                                <p><?=$selP['date_time']?></p><img class="img-responsive" src="Admin/coverspost/<?=$couvev['guid']?>">
                                <h1> <a href="<?=$selP['id']?>/<?=str_replace(' ','-',$selP['post_title'])?>"><?=substr($selP['post_title'],0,15) ?>...</a></h1></div>
                        <?php   }
                            }else{?>
                            <div class="col-sm-12 nopad_nomag category_content">
                                <h1> <a style="color:red">No post found</a></h1></div>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6" style="position:relative;">
                        <h1 class="category_title2">Edito <a href="category/Edito/1" class="news_more">More </a></h1>
                        <div class="row" style="margin:inherit;">
                        <?php 
                            lastpost('edito','0,6');
                            if($postCount>0){
                                while($selP = $selPost->fetch()){
                                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                    $couve->execute(array($selP['id']));
                                    $couvev = $couve->fetch();    
                                ?>
                                <div class="col-sm-6 nopad_nomag category_content">
                                <p><?=$selP['date_time']?></p><img class="img-responsive" src="Admin/coverspost/<?=$couvev['guid']?>">
                                <h1> <a href="<?=$selP['id']?>/<?=str_replace(' ','-',$selP['post_title'])?>"><?=substr($selP['post_title'],0,15) ?>...</a></h1></div>
                        <?php   }
                            }else{?>
                            <div class="col-sm-6 nopad_nomag category_content">
                                <h1> <a style="color:red">No post found </a></h1></div>
                        <?php } ?>
            
                        </div>
                    </div>
                    <div class="col-md-6" style="position:relative;">
                        <h1 class="category_title2">North-south <a href="category/Northsouth/1" class="news_more">More </a></h1>
                        <div class="row" style="margin:inherit;">
                        <?php 
                            lastpost('northsouth','0,6');
                            if($postCount>0){
                                while($selP = $selPost->fetch()){
                                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                    $couve->execute(array($selP['id']));
                                    $couvev = $couve->fetch();        
                                ?>
                                <div class="col-md-6 col-sm-6 nopad_nomag category_content">
                                <p><?=$selP['date_time']?></p><img class="img-responsive" src="Admin/coverspost/<?=$couvev['guid']?>">
                                <h1> <a href="<?=$selP['id']?>/<?=str_replace(' ','-',$selP['post_title'])?>"><?=substr($selP['post_title'],0,15) ?>...</a></h1></div>
                        <?php   }
                            }else{?>
                            <div class="col-sm-6 nopad_nomag category_content">
                                <h1> <a style="color:red">No post found </a></h1></div>
                        <?php } ?>
                            
                        </div>
                    </div>
                    <div class="col-md-12" style="position:relative;">
                        <h1 class="category_title">Reports <a href="category/Reports/1" class="news_more">More </a></h1>
                        <div class="row" style="margin:inherit;">
                        <?php 
                            lastpost('reports','0,12');
                            if($postCount>0){
                                while($selP = $selPost->fetch()){
                                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                    $couve->execute(array($selP['id']));
                                    $couvev = $couve->fetch();    
                                ?>
                                <div class="col-md-3 col-sm-6 nopad_nomag category_content">
                                <p><?=$selP['date_time']?></p><img class="img-responsive" src="Admin/coverspost/<?=$couvev['guid']?>">
                                <h1> <a href="<?=$selP['id']?>/<?=str_replace(' ','-',$selP['post_title'])?>"><?=substr($selP['post_title'],0,15) ?>...</a></h1></div>
                        <?php   }
                            }else{?>
                            <div class="col-sm-6 nopad_nomag category_content">
                                <h1> <a style="color:red">No post found </a></h1></div>
                        <?php } ?>
                            
                        </div>
                    </div>
                    <div class="col-md-12" style="position:relative;">
                        <h1 class="category_title">Career <a href="category/Career/1" class="news_more">More </a></h1>
                        <div class="row" style="margin:inherit;">
                        <?php 
                            lastpost('career','0,12');
                            if($postCount>0){
                                while($selP = $selPost->fetch()){
                                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                                    $couve->execute(array($selP['id']));
                                    $couvev = $couve->fetch();    
                                ?>
                                 <div class="col-sm-3 nopad_nomag category_content">
                                <p><?=$selP['date_time']?></p><img class="img-responsive" src="Admin/coverspost/<?=$couvev['guid']?>">
                                <h1> <a href="<?=$selP['id']?>/<?=str_replace(' ','-',$selP['post_title'])?>"><?=substr($selP['post_title'],0,15) ?>...</a></h1></div>
                        <?php   }
                            }else{?>
                            <div class="col-sm-6 nopad_nomag category_content">
                                <h1> <a style="color:red">No post found </a></h1></div>
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