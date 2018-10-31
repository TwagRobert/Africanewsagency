<?php
    session_start();
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
</head>

<body>
    <?php include 'top.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php include 'navig.php'; ?>
            <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main">
                <h1 class="page-header">Settings </h1>
                <form class="form-horizontal">
                    <h3 class="text-left">General Settings</h3>
                    <p>Info: </p>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Email Address</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">New User Default Role</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <optgroup label="Role">
                                    <option value="12" selected="">Author</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Timezone </label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <optgroup label="Timezone">
                                    <option value="" selected="">UTC</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Default Post Category</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <optgroup label="Category">
                                    <option value="" selected="">Uncategorized</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <h3>Mail SMTP</h3>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">From Email</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">From Name</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">SMTP Host</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">SMTP Port</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Encryption </label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <optgroup label="Encryption">
                                    <option value="" selected="">TLS</option>
                                    <option value="">SSL</option>
                                    <option value="">None</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Authentication </label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option value="" selected="">On</option>
                                <option value="">Off</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">SMTP Username</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">SMTP Password</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <h3>Social Media Links</h3>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Facebook </label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Twitter </label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">Instagram </label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="control-label">RSS Feeds</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button class="btn btn-primary" type="button">Save Settings</button>
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