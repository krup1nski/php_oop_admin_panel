<?php
include("config/app.php");
include("codes/authentication.php");
$auth->isLoggedIn();

include("includes/header.php");
?>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php include('message.php') ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="text" name="pass" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Confirm Password</label>
                                    <input type="text" name="cpass" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="register-btn" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include("includes/footer.php");
?>