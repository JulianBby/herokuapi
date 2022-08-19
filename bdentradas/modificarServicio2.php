<?php

    modificarServicio($_POST['idEntrada'], $_POST['nombreCliente'], $_POST['documentoCliente'], $_POST['tipoPrenda'], $_POST['servicio'], $_POST['precio'],$_POST['detalles'],$_POST['fechaEntrada']);

    function modificarServicio($idEntrada,$nombreCliente, $documentoCliente, $tipoPrenda, $servicio, $precio, $detalles, $fechaEntrada){
        include "conexion.php";
        $sentencia1 = "UPDATE entradas SET idEntrada='".$idEntrada."', nombreCliente='".$nombreCliente."', 
        documentoCliente='".$documentoCliente."', tipoDePrenda='".$tipoPrenda."', servicio='".$servicio."',
        precio='".$precio."', detalles='".$detalles."', fechaEntrada='".$fechaEntrada."' WHERE idEntrada='".$idEntrada."' ";
        $conexion->query($sentencia1) or die("Error al actualizar datos".mysqli_error($conexion));
        $sentencia2 = "UPDATE salidas INNER JOIN entradas SET salidas.fechaEntrada = entradas.fechaEntrada, salidas.precio = entradas.precio WHERE salidas.idEntrada='".$idEntrada."'";
        $conexion->query($sentencia2) or die("Error al actualizar datos".mysqli_error($conexion));
    }
?>

<script type="text/javascript">
    alert("Datos actualizados exitosamente!!");
    window.location.href="../entradas.php";
</script>