<?php

class AuthenticationController
{
    public function __construct()
    {
        $db = new DBConnection;
        $this->conn = $db->conn;
        $this->checkIsLoggedIn();
    }

    private function checkIsLoggedIn()
    {
        if(!isset($_SESSION['authenticated'])){
            redirect('Login to access this page', 'login.php');
            return false;
        }else{
            return true;
        }
    }

    public function authUserDetail(){
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_id = $_SESSION['auth_user']['user_id'];

            $getUserData = $this->conn->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
            $getUserData->execute([$user_id]);

            if($getUserData->rowCount() > 0){
                $data = $getUserData->fetch(PDO::FETCH_ASSOC);
                return $data;
            }else{
                redirect('Login to access this page', 'login.php');
            }

        }else{
            redirect('Login to access this page', 'login.php');
        }
    }

    public function isAdmin(){
        $checkAdmin = $this->conn->prepare("SELECT * FROM users WHERE id = ? AND role = 1 LIMIT 1");
        $checkAdmin->execute([$_SESSION['auth_user']['user_id']]);
        if($checkAdmin->rowCount() > 0){
            return true;
        }else{
            redirect('You are not admin', 'index.php');
        }
    }

}
