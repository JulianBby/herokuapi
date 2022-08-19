<?php

    NuevoServicio($_POST['nombreCliente'], $_POST['documentoCliente'], $_POST['tipoPrenda'], $_POST['servicio'], $_POST['precio'],$_POST['detalles'],$_POST['fechaEntrada']);

    function NuevoServicio($nombreCliente, $documentoCliente, $tipoPrenda, $servicio, $precio, $detalles, $fechaEntrada){
        include "conexion.php";
        $sentencia = "INSERT INTO entradas (nombreCliente, documentoCliente, tipoDePrenda, servicio, precio, detalles, fechaEntrada) VALUES ('".$nombreCliente."', '".$documentoCliente."', 
        '".$tipoPrenda."', '".$servicio."', '".$precio."', '".$detalles."', '".$fechaEntrada."')";
        $conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
    }
?>

<script type="text/javascript">
    alert("Servicio Ingresado Exitosamente!!");
    window.location.href='../entradas.php';
</script>