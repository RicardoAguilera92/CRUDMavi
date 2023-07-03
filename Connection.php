<?php

class Connect {
     private  $server = "localhost";
     private  $database = "mavi_occidente";
     private  $username = "root";
     private  $password = "";

     public function Connection() {
        $conexion=mysqli_connect($this->server, $this->username, $this->password, $this->database);   
        return $conexion;                
     }
    
}


    // function Connection () {
    //     $server = "localhost";
    //     $database = "mavi_occidente";
    //     $username = "root";
    //     $password = "";

    //     $mysqli = mysqli_connect($server, $username, $password);

    //     mysqli_select_db($mysqli, $database);

    //     return $mysqli;



    
    
    


    //$mysqli = new mysqli ($server,$username, $password, $database);

  