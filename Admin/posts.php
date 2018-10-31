<?php
  session_start();
  include 'php/bddconnect.php';
  include 'php/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Africa News Agency Dashboard</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
  <?php include 'top.php'?>
    <div class="container-fluid">
      <div class="row">
      <?php include 'navig.php';?>
      <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main">
        <h1 class="page-header">Posts </h1>
        <div>
          <div>
              <div><a href="newpost" class="add_new_btn">ADD NEW</a></div>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Post Title</th>
                    <th>Posted by</th>
                    <th>Athor</th>
                    <th>Posted time</th>
                    <th>Category link</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $don = $con->query("SELECT * FROM `post` ORDER BY id DESC LIMIT 0,1");
                $don = $don->fetch();
                $alpo = $con->query("SELECT * FROM `post`");
                while($alpoo = $alpo->fetch()){?>
                  <tr>
                    <td><?=$alpoo['post_title']?></td>
                    <td><?=$don['id']?></td>
                    <td><?=$alpoo['auteur']?></td>
                    <td><?=$alpoo['date_time']?></td>
                    <td><?=$alpoo['category_name']?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> 
        </div>
      </div>  
    </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
