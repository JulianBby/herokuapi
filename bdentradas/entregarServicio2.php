<?php

    entregarServicio($_POST['idEntrada'], $_POST['fechaEntrada'], $_POST['fechaEntrega'], $_POST['precio'], $_POST['observaciones']);

    function entregarServicio($idEntrada, $fechaEntrada, $fechaSalida, $precio, $observaciones){
        include "conexionOn.php";
        $sentencia = "INSERT INTO salidas (idEntrada, fechaEntrada, fechaSalida, precio, observaciones) VALUES ('".$idEntrada."', '".$fechaEntrada."', '".$fechaSalida."', '".$precio."', '".$observaciones."')";
        $conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
    }
?>

<script type="text/javascript">
    alert("Servicio Entregado Exitosamente!!");
    window.location.href='../Entradas.php';
</script>