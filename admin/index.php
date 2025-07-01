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

<div class="container-fluid">
    <div class="row">
        <?php include(__DIR__ . '..\includes\sidebar.php') ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2>Section title</h2>

        </main>
    </div>
</div>