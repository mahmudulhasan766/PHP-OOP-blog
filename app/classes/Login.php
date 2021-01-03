<?php

namespace App\classes;
use App\classes\Database;

class Login{
    
    public function loginCheck($data){

        echo "Login";
        $username = $data['username'];
        $password = md5($data['password']);
        
        //header('Location:index.php');
        echo $password;
        echo "<br>";
        echo $username;
        $sql = "SELECT * FROM `users` WHERE `username`=' $username'AND `password` =' $password'";
        
        //mysqli_query(Database::dbCon());
        $result = mysqli_query(Database::dbCon(),$sql);

        Database::dbCon();

        if($result){

            echo "hasan babu";
             if(mysqli_num_rows($result)==0){
                header('Location:index.php');
                 
             }else{
                 $login_error = "Username or Password invalid!";
                 return $login_error;
             }
        }else{
            die();
        }
    }
}