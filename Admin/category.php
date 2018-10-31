<?php
    session_start();
    include 'php/auth.php';
    include 'php/addcateg.php';
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
                <h1 class="page-header">Category </h1>
                <div class="row">
                    <div class="col-sm-5">
                        <h3>New Category</h3>
                        <div>
                            <form method="post">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input class="form-control sqr_border" name="catname" type="text">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm sqr_border" name="categ" type="submit">Add New Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                    if(isset($msg)){?>
                    <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?=$msg?>.
                    </div>
                <?php }
                ?>
                    <div class="col-sm-7">
                        <!-- <div>
                            <select>
                                <optgroup label="Choose Action">
                                    <option value="" selected="">Choose Action</option>
                                    <option value="">Move to trash</option>
                                    <option value="">Edit</option>
                                </optgroup>
                            </select><a href="#" class="add_new_btn add_mag_btn">APPLY</a></div> -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th>Action</th> -->
                                        <th> <a href="#">Name </a></th>
                                        <th> <a href="#">link </a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <!-- <td>Cell 1</td> -->
                                    <?php while($dispca = $alcateg->fetch()){?>
                                        <tr>
                                        <td><?=$dispca['category']?></td>
                                        <td><?=$dispca['category_link']?></td>
                                        </tr>
                                    <?php } ?>
                                   
                                </tbody>
                            </table>
                        </div>
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