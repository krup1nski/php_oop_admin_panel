<?php
include("config/app.php");
include_once("controllers/AuthenticationController.php");
include("codes/authentication.php");
$authentication = new AuthenticationController;
$data = $authentication->authUserDetail();

include("includes/header.php");
?>

    <div class="py-5">
        <div class="container">
            <?php include('message.php') ?>
            <h1>My Profile</h1>
            <hr>
            <h4>Full Name: <?= $data['fname']." ".$data['lname']?></h4>
        </div>
    </div>

<?php
include("includes/footer.php");
?>