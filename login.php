<?php

if (!empty($_POST['user']) && !empty($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    if ($user === "usuario" && $password === "123") {
        header("Location: clientes.php");
    } else {
        echo "error, usuario no valido";
    }
} else {
    echo "Complete los datos";
}
