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
$id = $_POST['id'];

$datos = array(
    $nombres, $apellido_paterno, $apellido_materno, $domicilio, $correo, $id
);

$obj = new metodo();

if ($obj->editar($datos) == 1) {
    header("Location: clientes.php");
} else {
    echo "Fallo el editar clientes";
}
