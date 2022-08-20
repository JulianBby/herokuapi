<?php include "menu.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/entradas.css">
    <script src="https://kit.fontawesome.com/691d48a54d.js" crossorigin="anonymous"></script>
    <title>Entradas</title>
</head>
<body>
    <div class="boton_nuevo">
        
    </div>
    <table class="tablaEntradas">
        <thead>
            <th>Código</th>
            <th>Nombre del Cliente</th>
            <th>Documento del Cliente</th>
            <th>Tipo de Prenda</th>
            <th>Servicio</th>
            <th>Precio</th>
            <th>Detalles</th>
            <th>Fecha de Entrada</th>
            <th><center><a href="bdentradas/nuevoServicio.php"><Button class="btn-nuevo">Nuevo</Button></a></center></th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php include "bdentradas/conexion.php";
            $sentencia = "SELECT * FROM entradas";
            $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion)); 
            while($fila = $resultado->fetch_assoc()){
                echo "<tr>";
                    echo "<td>"; echo $fila['idEntrada']; echo "</td>";
                    echo "<td>"; echo $fila['nombreCliente']; echo "</td>";
                    echo "<td>"; echo $fila['documentoCliente']; echo "</td>";
                    echo "<td>"; echo $fila['tipoDePrenda']; echo "</td>";
                    echo "<td>"; echo $fila['servicio']; echo "</td>";
                    echo "<td>"; echo $fila['precio']; echo "</td>";
                    echo "<td>"; echo $fila['detalles']; echo "</td>";
                    echo "<td>"; echo $fila['fechaEntrada']; echo "</td>";
                    echo "<td><a href='bdentradas/modificarServicio.php?idEntrada=".$fila['idEntrada']."'> <button type='button' class='btn-modificar'>Modificar</button></a></td>";
                    echo "<td><a href='bdentradas/eliminarServicio.php?idEntrada=".$fila['idEntrada']."'> <button type='button' class='btn-eliminar'>Eliminar</button></a></td>";
                    echo "<td><a href='bdentradas/entregarServicio.php?idEntrada=".$fila['idEntrada']."'> <button type='button' class='btn-entregar'>Entregar</button></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
