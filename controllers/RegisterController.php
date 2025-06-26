<?php

class RegisterController{

    public function __construct(){
        $db = new DBConnection;
        $this->conn = $db->conn;
    }

    public function registration($fname,$lname,$email,$pass)
    {
        $register_query = $this->conn->prepare("INSERT INTO users (fname, lname, email, pass) 
VALUES (?, ?, ?, ?)");
        $register_query->execute([$fname, $lname, $email, $pass]);
    }

    public function isUserExist($email)
    {
        $checkUser_query = $this->conn->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $checkUser_query->execute([$email]);

        if($checkUser_query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function confirmPassword($pass,$cpass)
    {
        if($pass == $cpass){
            return true;
        }else{
            return false;
        }
    }
}