<?php
class metodo
{
    public function mostrar($sql)
    {
        $conectar = new Connect();
        $coneccion = $conectar->Connection();

        $result = mysqli_query($coneccion, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function crear($datos)
    {
        $conectar = new Connect();
        $coneccion = $conectar->Connection();

        $sql = "INSERT into clientes ( nombres, apellido_paterno, apellido_materno, domicilio, correo) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

        return $result = mysqli_query($coneccion, $sql);
    }

    public function editar($datos)
    {
        $conectar = new Connect();
        $coneccion = $conectar->Connection();

        $sql = "UPDATE clientes set nombres='$datos[0]', apellido_paterno='$datos[1]', apellido_materno='$datos[2]',domicilio='$datos[3]',correo='$datos[4]' where id='$datos[5]'";

        return $result = mysqli_query($coneccion, $sql);
    }

    public function eliminar($id)
    {
        $conectar = new Connect();
        $coneccion = $conectar->Connection();
        $sql = "DELETE from clientes where id='$id'";
        

        return $result = mysqli_query($coneccion, $sql);
    }
}
