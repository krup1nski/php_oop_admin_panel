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
            <h2>USERS</h2>
            <a href="<?= base_url('admin/add_user.php') ?>">Create a New User</a>
            <div class="table-responsive small">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">№id</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                        <td>Show / Edit / Delete</td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>