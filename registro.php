<?php include ("menu.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/registro.css">
    <title>Registro</title>
</head>
  
<body>
    
    <form class="form-register" action="../controller_login.php" method="POST"> <!-- "action": define la ubicación (URL) donde se envían los datos que el formulario ha recopilado cuando se validan. "method": define con qué método HTTP se envían los datos.-->
        <input class="controls" type="text" name="nombre" placeholder="Nombre">
        <input class="controls" type="number" name="numeroDoc" placeholder="Número de documento">
        <input class="controls" type="email" name="correo" placeholder="Correo">                
        <input class="controls" type="password" name="pas" placeholder="Contraseña">
        <center><input class="fcc-btn" type="submit" value="registrar" name="registrar"></center>
    </form>

</body>
</html>