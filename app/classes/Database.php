<?php
namespace App\classes;

use mysqli;

class Database{
    public function dbCon(){

        echo "BAtabase";
        $host ="localhost";
        $user ="root";
        $pass ="";
        $db ="blog";

        $link = mysqli_connect($host, $user,$pass,$db);
        return $link;
    }
}


?>