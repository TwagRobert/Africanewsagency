<?php
    session_start();
    include 'php/auth.php';
    include 'php/medias.php';
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
                <h1 class="page-header">Upload New Media</h1>
                <?php if(isset($msg)){?>
                                    <div class="alert alert-info right-sidebar alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>info!</strong> <?=$msg?>
                                    </div>
                             <?php   } ?>

                <form class="form-inline" method="post" enctype="multipart/form-data">
                    <p style="font-size:25px;text-decoration:underline">Upload file in gallery</p>
                    <div class="form-group">
                        <input type="file" name="avatar" id="avatar">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" name="galeri" type="submit">Upload to Gallery</button>
                    </div>
                </form>


                <br><br>
                <form class="form-inline" method="post" enctype="multipart/form-data">
                <p style="font-size:25px;text-decoration:underline">Upload file in covers</p>
                    <div class="form-group">
                        <input type="file" name="avatar" id="avatar">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" name="covers" type="submit">Upload to Covers</button>
                    </div>
                </form>
                <br><br>
                <form class="form-inline" method="post" enctype="multipart/form-data">
                <p style="font-size:25px;text-decoration:underline">Upload file in banner</p>
                    <div class="form-group">
                        <input type="file" name="avatar" id="avatar">
                    </div>
                    <div class="form-group">
                        <label>Hide this image on <input type="date" id="datepicker" name="dateend"></label>
                        <script>
                        $( function() {
                            $( "#datepicker" ).datepicker();
                        } );
                        </script>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" name="banner" type="submit">Upload to Banner</button>
                    </div>
                </form><br><br>
                <form method="post">
                <p style="font-size:25px;text-decoration:underline">Upload Video link</p>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input name="link" class="form-control input-lg sqr_border" type="text" placeholder="Link of the video goes here.....">
                            </div>
                            <div class="form-group">
                                <input name="title" class="form-control input-lg sqr_border" type="text" placeholder="Title of the video.....">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control sqr_border txtarea" name="desc" rows="5" placeholder="Compose podescriptionst...."></textarea>
                            </div>
                            <button class="btn btn-primary" name="videos" type="submit">Upload video </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>