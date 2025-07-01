<?php

class StudentController{

    public function __construct(){
        $db = new DBConnection;
        $this->conn = $db->conn;
    }

    public function create($data){
        $query = $this->conn->prepare("INSERT INTO students(fname,lname,gender,age,email,phone, course) VALUES(?,?,?,?,?,?,?)");
        $query->execute([$data['first_name'],
            $data['last_name'],
            $data['gender'],
            $data['age'],
            $data['email'],
            $data['phone'],
            $data['course']]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if($user){
            return true;
        }else{
            return false;
        }
    }

}