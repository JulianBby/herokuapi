<?php
    eliminarServicio($_GET['idEntrada']);

    function eliminarServicio($idEntrada){
        include "conexionOn.php";
        $sentencia = "DELETE FROM entradas WHERE idEntrada='".$idEntrada."' ";
        $conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
    }
?>

<script type="text/javascript">
    alert("Servicio Eliminado!");
    window.location.href='../Entradas.php';
</script>