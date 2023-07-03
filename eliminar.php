<?php

$id = $_GET['id'];

require_once "./database/Connection.php";
require_once "./modulos/metodos.php";

$obj = new metodo();

if ($obj->eliminar($id) == 1) {
    header("Location: clientes.php");
} else {
    echo "Fallo al eliminar";
}
