<?php
    include 'php/bddconnect.php';
    include 'php/lastpost.php';
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
                    <h2 class="page_title">Gallery </h2></div>
                <div class="row photo-gallery-div">
                <?php 
                         $sele = $con->query("SELECT * FROM `galery` ORDER BY id DESC");
                            while($select = $sele->fetch()){?>
                    <div class="col-md-3 col-sm-4 photos">
                        <div class="single-image"><img class="img-responsive" oncontextmenu="myFunction()" src="gallery/<?=$select['image_name']?>">
                            <p class="text-center mdc-bg-green-A700"> <a href="#"  data-toggle="modal" data-target="#myModal">Subscribe </a></p>
                        </div>
                    </div>
                    <?php } ?>
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
                <div class="widget">
                    <h1 class="widget-title">Latest News</h1>
                    <div class="tab-content">
                    <?php
					$small = $con->query("SELECT * FROM `post` ORDER BY id DESC LIMIT 0,3");
					while($smallp = $small->fetch()){
					$cou = $con->prepare("SELECT * FROM `post_cover` WHERE post_parent= ?");
					$cou->execute(array($smallp['id']));
					$coucou = $cou->fetch();
                    ?>
                        <div class="tab-streams">
							<a class="thumb"> <img src="Admin/coverspost/<?=$coucou['guid']?>"></a>
                            <h2 class="post-title-small"> <a href="<?=$smallp['id']?>/<?=str_replace(' ','-',$smallp['post_title'])?>"><?=substr($smallp['post_title'],0,50)?> ...</a></h2>
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
        </div>
    </div>
		<div class="container-fluid">
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Subscribe</h4>
				</div>
				<div class="modal-body">
				  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6SQFKYYGE65KA">
					<table>
					<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
						<option value="Option 1">Option 1 : €300,00 EUR - annuel</option>
						<option value="Option 2">Option 2 : €50,00 EUR - mensuel</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="EUR">
					<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
					<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
			  </div>
			  
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