<?php 
session_start();
unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confecciones Golden</title>
    <link rel="Stylesheet" href="styles/login.css">
</head>
<body>
        <div>
            <section class="header">Bienvenido</section>
        </div>

        <div class="div-img">
            <img src="imagenes/logo.png" height="330" weigth="330" alt="centrar img con flexbox" />
        </div>
        
        <form class="form-login" action="basededatos/controller_login.php" method="post">
            <div>
                <input class="controls" type="email" name="correo" placeholder="Correo">
            </div>
            <div>
                <input class="controls" type="password" name="pas" placeholder="Contraseña">
            </div>
            <div>
                <a href="registro.php">Registrarse</a>
            </div>
            <div>            
                <input class="buttons" type="submit" value="Entrar" name="entrar">
            </div>
        </form>
</body>
</html>     