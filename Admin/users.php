<?php
  session_start();
  include 'php/bddconnect.php';
  include 'php/auth.php';
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
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
    <?php include 'top.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php include 'navig.php';?>
            <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main">
                <h1 class="page-header">Users </h1>
                <div>
                    <div>
                        <div><a href="newuser" class="add_new_btn">ADD NEW</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last NAme</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                <?php  $aluser= $con->query("SELECT * FROM `admins`");
                while($dipu = $aluser->fetch()){?>
                  <tr>
                    <td><?=$dipu['firstname']?></td>
                    <td><?=$dipu['lastname']?></td>
                    <td><?=$dipu['email']?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table> 
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
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
</body>

</html>