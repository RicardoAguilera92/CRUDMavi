<?php

$id = $_GET['id'];

require_once "Connection.php";
require_once "metodos.php";

$obj = new metodo();

if ($obj->eliminar($id) == 1) {
    header("Location: index.php");
} else {
    echo "Fallo al eliminar";
}
