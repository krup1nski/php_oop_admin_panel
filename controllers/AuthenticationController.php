<?php
include("config/app.php");
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

            $getUserData = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
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


}

$authentication = new AuthenticationController;