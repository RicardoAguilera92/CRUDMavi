<?php

    require_once "Connection.php";
    require_once "metodos.php";
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
        header("Location: index.php");
    }else{
        echo "Fallo el crear clientes";
    }

    // $sql = "INSERT INTO clientes VALUES('$id', '$nombres', '$apellido_paterno', '$apellido_materno', '$domicilio', '$correo')";
    // $query = mysqli_query($con, $sql);

    // if($query){
    //     Header("Location: index.php");
    