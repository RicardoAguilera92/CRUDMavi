<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="contenedor">
        <div class="central">
            <label class="titulo">Iniciar Sesion</label>
            <form action="login.php" method="POST" class="login">
                <p><label for="user">Usuario</label>
                    <input type="text" name="user">
                </p>
                <p><label for="password">Contrasena</label>
                    <input type="password" name="password">
                </p>

                <button type="submit" >Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>