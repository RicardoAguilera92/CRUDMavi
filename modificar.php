<?php
require_once "Connection.php";
$conectar = new Connect();
$coneccion = $conectar->Connection();
$id = $_GET['id'];
$sql = "SELECT nombres,apellido_paterno,apellido_materno,domicilio,correo from clientes where id='$id'";
$result = mysqli_query($coneccion, $sql);
$ver = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Editar usuarios</title>

</head>

<body>
    <div>
        <form action="editar.php" method="POST">
            <input type="text" hidden="" value = "<?php echo $id ?>" name="id">
            <input type="text" name="nombres" placeholder="Nombre" value="<?php  echo $ver[0] ?>">
            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" value="<?php  echo $ver[1] ?>">
            <input type="text" name="apellido_materno" placeholder="Apellido Materno" value="<?php  echo $ver[2] ?>">
            <input type="text" name="domicilio" placeholder="Domicilio" value="<?php  echo $ver[3] ?>">
            <input type="email" name="correo" placeholder="Correo" value="<?php  echo $ver[4] ?>">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>