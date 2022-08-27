<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/registro.css">
    <title>Registro</title>
</head>
  
<body>
    
    <form class="form-register" action="basededatos/controller_login.php" method="post"> <!-- "action": define la ubicación (URL) donde se envían los datos que el formulario ha recopilado cuando se validan. "method": define con qué método HTTP se envían los datos.-->
        <input class="controls" type="text" name="nombre" placeholder="Nombre" required>
        <input class="controls" type="number" name="numeroDoc" placeholder="Número de documento" required>
        <input class="controls" type="email" name="correo" placeholder="Correo" required>                
        <input class="controls" type="password" name="pas" placeholder="Contraseña" required>
        <div id="div-btn">
            <input class="fcc-btn" type="submit" value="Registrar" name="registrar">
            <a class="btn-regresar" href="index.php">Regresar</a>
        </div>
        
        
    </form>

</body>
</html>