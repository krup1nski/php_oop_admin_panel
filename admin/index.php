<?php
include('../config/app.php');
include_once ('../controllers/AuthenticationController.php');
$authentication = new AuthenticationController;
$authentication->isAdmin();

include('../includes/header.php');
?>

    <div class="py-5">
        <div class="container">
            <?php include(__DIR__ . '/../message.php') ?>
            <h1>ADMIN PAGE</h1>
        </div>
    </div>

<?php
include('../includes/footer.php');
?>