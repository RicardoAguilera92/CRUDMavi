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

