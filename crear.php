<?php

    require_once "./database/Connection.php";
    require_once "./modulos/metodos.php";
    // include('Connection.php');
    // $con = connection();

    // $id = null;
    $nombres = $_POST['nombres'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $domicilio = $_POST['domicilio'];
    $correo = $_POST['correo'];
    
    $datos = array(
        $nombres, $apellido_paterno, $apellido_materno,$domicilio,$correo
    );

    $obj = new metodo();
    if($obj->crear($datos)==1){
        header("Location: clientes.php");
    }else{
        echo "Fallo el crear clientes";
    }

