<?php
    session_start();
    include 'php/auth.php';
    include 'php/addpost.php';
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
                <h1 class="page-header">New Post</h1>
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input name="title" class="form-control input-lg sqr_border" type="text" placeholder="Title goes here.....">
                            </div>
                            <div class="form-group">
                                <input name="auteur" class="form-control input-lg sqr_border" type="text" placeholder="Author.....">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control sqr_border txtarea" name="content" rows="10" placeholder="Compose post...."></textarea>
                            </div>
                            <button class="btn btn-default" name="draft" type="submit">Save as draft</button>
                            <button class="btn btn-primary" name="publish" type="submit">Publish </button>
                        </div>
                        <div class="col-sm-4">
                            <div class="featured_image">
                                <div class="form-group">
                                    <label>Choose cover image</label><input id="avatar" type="file" name="avatar"> 
                                </div>
                            </div>
                            <div class="right-sidebar">
                                <h4>Choose Category </h4>
                            <?php 
                                while($allcateg = $categ->fetch()){?>
                                <div class="checkbox">
                                    <label>
                                        <input value="<?=$allcateg['category_link']?>" name="category" type="radio"> <?=strtoupper($allcateg['category'])?></label>
                                </div>
                            <?php } ?>
                            </div>
                            <div class="right-sidebar">
                                <h4>Add Tag</h4>
                                <div class="checkbox">
                                        <input class="form-control" name="tag1" placeholder="type tag one here" type="text"> 
                                </div>
                                <div class="checkbox">
                                        <input class="form-control" name="tag2" placeholder="type tag two here" type="text">
                                </div>
                                <div class="checkbox">
                                        <input class="form-control" name="tag3" placeholder="type tag three here" type="text"> 
                                </div>
                            </div>
                            <?php if(isset($success)){?>
                                <div class="alert alert-info right-sidebar alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>info!</strong> <?=$success?>
                                </div>
                                <?php }elseif(isset($msg)){?>
                                    <div class="alert alert-danger right-sidebar alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>info!</strong> <?=$msg?>
                                    </div>
                             <?php   } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>tinymce.init({ 
        selector:'.txtarea' ,
        height: 300,
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true,
    //plugins: 'image code',
  //toolbar: 'undo redo | link image | code',
  // enable title field in the Image dialog
  image_title: true, 
  // enable automatic uploads of images represented by blob or data URIs
  automatic_uploads: true,
  // add custom filepicker only to Image dialog
  file_picker_types: 'image',
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    input.onchange = function() {
      var file = this.files[0];
      var reader = new FileReader();
      
      reader.onload = function () {
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        // call the callback and populate the Title field with the file name
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };
    
    input.click();
  }
    });</script>
</body>

</html>