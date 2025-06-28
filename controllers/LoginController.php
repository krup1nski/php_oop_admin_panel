<?php

class LoginController{

    public function __construct(){
        $db = new DBConnection;
        $this->conn = $db->conn;
    }

    public function userLogin($email, $pass) {
        $checkUser_query = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $checkUser_query->execute([$email]);
        $user = $checkUser_query->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($pass, $user['pass'])) {
            $this->userAuthentication($user);
            return true;
        }
        return false;
    }

    public function userAuthentication($data){
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $data['id'],
            'user_fname' => $data['fname'],
            'user_lname' => $data['lname'],
            'user_email' => $data['email']
        ];
    }

    public function isLoggedIn(){
        if(isset($_SESSION['authenticated'])){
            redirect('You are already logged in', 'index.php');
        }
    }

    public function logout(){
        if(isset($_SESSION['authenticated'])){
            unset($_SESSION['authenticated']);
            unset($_SESSION['auth_user']);
            return true;
        }else{
            return false;
        }
    }
}