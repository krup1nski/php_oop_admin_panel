<?php
include("config/app.php");
include("controllers/RegisterController.php");
include("controllers/LoginController.php");

$auth = new LoginController;

if(isset($_POST["logout-btn"])){
    $checkedLoggedOut = $auth->logout();
    if($checkedLoggedOut == true){
        redirect('Logged out successfully',"login.php");
    }
}


if(isset($_POST["login-btn"])){
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $pass = $_POST["pass"];

    $checkLogin = $auth->userLogin($email, $pass);
    if($checkLogin){
        redirect('Logged in successfully', 'index.php');
    }else{
        redirect('Invalid Email or Password', 'login.php');
    }
}


if(isset($_POST["register-btn"])){
    $fname = $_POST["fname"];
    $fname = htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');

    $lname = $_POST["lname"];
    $lname = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');

    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];


    $register = new RegisterController;
    $result_pass = $register->confirmPassword($pass, $cpass);

    if($result_pass){
        $result_user = $register->isUserExist($email);
        if($result_user){
            redirect("Email is already exist", "register.php");
        }else{
            $pass = $_POST["pass"];
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

            $register_query = $register->registration($fname, $lname, $email, $hashed_pass);

            if($register_query){
                redirect("Something went wrong", "register.php");
            }else{
                redirect("Registered successfully", "register.php");
            }
        }
    }else{
        redirect("Password and confirm password not matched", "register.php");
    }

}