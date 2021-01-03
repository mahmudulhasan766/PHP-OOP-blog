<?php

namespace App\classes;
use App\classes\Database;

class Login{
    public function loginCheck($data){
        $username = $data['username'];
        $password = md5($data['password']);
        
        echo $password;
        $sql = "SELECT * FROM `users` WHERE `username`=' $username'AND `password` =' $password'";
        
        //mysqli_query(Database::dbCon());
        $result = mysqli_query(Database::dbCon(),$sql);

        if($result){
             if(mysqli_num_rows($result)==1){

             


             }else{
                 $login_error = "Username or Password invalid!";
                 return $login_error;
             }
        }else{
            die();
        }
    }
}