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
            <h2>CREATE USER</h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="card p-3 ">
                        <form action="codes/student_code.php" method="post">
                            <div class="mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Gender</label>
                                <input type="number" name="gender" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Age</label>
                                <input type="number" name="age" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Course</label>
                                <input type="text" name="course" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="add_new_user" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>