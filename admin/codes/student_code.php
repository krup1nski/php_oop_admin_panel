<?php

include '../../config/app.php';
include_once '../controllers/StudentController.php';

if(isset($_POST["add_new_user"])){
    $data = [
        "first_name" => $_POST["first_name"],
        "last_name" => $_POST["last_name"],
        "gender" => $_POST["gender"],
        "age" => $_POST["age"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "course" => $_POST["course"],
    ];

    $student = new StudentController;
    $result = $student->create($data);

    if($result){
        redirect("success", 'admin/users.php');
    }else{
        redirect("error", 'admin/users.php');
    }
}