<?php
    if(isset($_POST['suscribe'])){
        if(!empty($_POST['emails'])){
            $emails = htmlspecialchars($_POST['emails']);
            $suscriber = $con->prepare("INSERT INTO `suscribers`(`emails`) VALUES (?)");
            $suscriber->execute(array($emails));

            $success = "success";

        }
    }
?>
<?php
    if(isset($success)){?>
    <div class="alert alert-success" style="padding: 1px;padding-left: 36px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        subscription successful.
    </div>
<?php   }
?>
<form method="post">
    <input class="form-control" name="emails" type="email" placeholder="Email@address.com" id="subscribe-text">
    <button class="btn btn-default subscribe-button" name="suscribe" type="submit">Subscribe </button>
</form>