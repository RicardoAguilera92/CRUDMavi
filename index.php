<?php
    require_once "Connection.php";
    require_once "metodos.php";
// include('Connection.php');
// $con = connection();

// $sql = "SELECT * FROM clientes";
// $query = mysqli_query($con, $sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAAVI Clientes</title>
</head>

<body>

    <form action="crear.php" method="POST">
        <h1>Crear usuario</h1>
        <input type="text" name="nombres" placeholder="nombres">
        <input type="text" name="apellido_paterno" placeholder="apellido paterno">
        <input type="text" name="apellido_materno" placeholder="apellido materno">
        <input type="text" name="domicilio" placeholder="domicilio">
        <input type="email" name="correo" placeholder="correo">
        <input type="submit" value="agregar usuario">
    </form>
    <div>
        <h2>Usuarios Agregados</h2>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido paterno</th>
                    <th>apellido materno</th>
                    <th>domicilio</th>
                    <th>correo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $obj = new metodo();
                    $sql="SELECT id,nombres,apellido_paterno,apellido_materno,domicilio,correo from clientes";
                    $datos=$obj->mostrar($sql);
                 foreach ($datos as $key) { ?>
                    <tr>
                        <th>
                            <?= $key['id'] ?>
                        </th>
                        <th> <?= $key['nombres'] ?></th>
                        <th> <?= $key['apellido_paterno'] ?></th>
                        <th> <?= $key['apellido_materno'] ?></th>
                        <th> <?= $key['domicilio'] ?></th>
                        <th> <?= $key['correo'] ?></th>

                        <th><a href="modificar.php?id= <?= $key['id'] ?>">Editar</a></th>
                        <th><a href="eliminar.php?id=<?=  $key['id'] ?>">Eliminar</a></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>