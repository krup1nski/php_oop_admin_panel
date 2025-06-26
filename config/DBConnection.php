<?php

class DBConnection{
    public function __construct(){
        global $driver, $host, $db_name, $charset, $db_user, $db_pass, $options;
        try{
            $conn = new PDO(
                "$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options
            );
        }catch(PDOException $i){
            die ("Connection failed: " . $i->getMessage());
        }

        echo "Connected successfully";
        return $this->conn = $conn;
    }
}