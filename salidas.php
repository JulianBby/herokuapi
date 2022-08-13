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
    <table class="tablaEntradas">
        <thead>
            <th>Código</th>
            <th>Fecha de Entrada</th>
            <th>Fecha de Salida</th>
            <th>Precio</th>
            <th>Observaciones</th>
        </thead>
        <tbody>
            <?php include "bdentradas/conexion.php";
            $sentencia = "SELECT * FROM salidas";
            $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion)); 
            while($fila = $resultado->fetch_assoc()){
                echo "<tr>";
                    echo "<td>"; echo $fila['idEntrada']; echo "</td>";
                    echo "<td>"; echo $fila['fechaEntrada']; echo "</td>";
                    echo "<td>"; echo $fila['fechaSalida']; echo "</td>";
                    echo "<td>"; echo $fila['precio']; echo "</td>";
                    echo "<td>"; echo $fila['observaciones']; echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
