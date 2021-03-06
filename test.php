<?php
    include 'php/bddconnect.php';
    include 'php/postselect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="/Africanewsagency/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa News Agency | news</title>
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
                <div class="page_title_container">
                    <h2 class="page_title"><?=$selectName['category'] ?></h2></div>
                <div class="relative_position">
                <?php
                if($selcount>0){
                while($selaf = $sel->fetch()){   
                    $couve = $con->prepare("SELECT * FROM `post_cover` WHERE `post_parent` = ? LIMIT 0,1");
                    $couve->execute(array($selaf['id']));
                    $couvev = $couve->fetch();    
                    ?>
                    <div class="relative_position">
                        <div class="page_news_header">
                            <h2> <a href="#"><?=$selaf['post_title']?> </a></h2>
                            <p class="meta">By <span><?=$selaf['auteur']?> </span> On <span><?=$selaf['date_time']?></span></p>
                        </div>
                        <div class="page_news_content"><img src="Admin/coverspost/<?=$couvev['guid']?>"/>
                            <p><?=substr($selaf['post_content'],0,650)?>(...) <a href="<?=$selaf['id']?>/<?=str_replace(' ','-',$selaf['post_title'])?>"style="color:#fd1e1e">Read more</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <?php
                }
            }else{?>
                    <div class="relative_position">
                        <div class="page_news_header" style="margin-top:120px;text-align:center;">
                            <h2 style="color:red;">No post found</h2>
                        </div>
                    </div>
                <?php }?>
                </div>
               <?php if($selcount>0){?>
                <div class="relative_position">
                    <div class="relative_position"><span class="left pag_controls"> <a href="category/<?=$_GET['id']?>/<?=$_GET['page']-1?>">Prev </a></span><span class="right pag_controls"> <a href="category/<?=$_GET['id']?>/<?=$_GET['page']+1?>">Next </a></span>
                    <center>
                        <ul class="list-inline pages pagination">
                        <?php for($i=$_GET['page'];$i<=($_GET['page']+10);$i++){?>
                            <li> <a <?php if(isset($_GET['page'])){ if($_GET['page']== $i){?>style="background:green"<?php } } ?> href="category/<?=$_GET['id']?>/<?=$i?>"><?=$i?></a></li>
                        <?php } ?>
                        </ul>
                    </center> 
                        <div class="clearfix"></div>
                    </div>
                </div>
               <?php } ?>
            </div>
            
                <div class="widget">
                    <h4 class="widget-title">Newsletter </h4>
                    <div class="widger-content">
                        <p>Subscribe to our newsletter</p>
							<?php include 'newsletterform.php';?>
                    </div>
                </div>
                <div class="widget">
                    <div class="tab-content">
                        <div class="slider"><img src="gallery/annonce.jpg">
                                <?php include 'gallery_side.php';?>
                        </div>
                        <h2 class="post-title-small"> <a href="image-bank">Subscribe to the gallery </a></h2></div>
                </div>
                <div class="widget">
                    <h1 class="widget-title">Latest News</h1>
                    <div class="tab-content">
                    <?php $small = $con->query("SELECT * FROM `post` ORDER BY id DESC LIMIT 0,3");
                          while($smallp = $small->fetch()){?>
                        <div class="tab-streams">
                            <a href="#" class="thumb"> <img src="Admin/coverspost/"></a>
                            <h2 class="post-title-small"> <a href="<?=$smallp['id']?>/<?=str_replace(' ','-',$smallp['post_title'])?>"><?=substr($smallp['post_title'],0,150)?>(...)</a></h2>
                            <p class="meta"><?=$smallp['date_time']?></p>
                            <div class="clearfix"></div>
                        </div>
                    <?php } ?>
                    </div>
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
			<div class="clearfix"></div>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>