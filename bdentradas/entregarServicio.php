<?php
    $consulta = consultaServicio($_GET['idEntrada']);

    function consultaServicio($idEntrada){
        include "conexion.php";
        $sentencia = "SELECT precio, fechaEntrada FROM entradas WHERE idEntrada='".$idEntrada."' ";
        $resultado = $conexion->query($sentencia) or die ("Error al consultar el producto".mysqli_error($conexion));
        $fila = $resultado->fetch_assoc();

        return [
            $fila['precio'],
            $fila['fechaEntrada'],
        ];
    }
    include "../menu.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Entregar Servicio</title>
        <link rel="stylesheet" href="../styles/formularioEntrega.css">
    </head>
    <body>
        <div class="todo">



            <div id="contenido">
                
                    <span><h1>Entregar Servicio</h1></span>
                    <br>
                    <form action="entregarServicio2.php" method="POST" style="border-collapse: separate; border-spacing: 1px 5px;">
                        <input type="hidden" name="idEntrada" value="<?php echo $_GET['idEntrada']?>">

                        <label for="">Precio: </label><br>
                        <input type="number" readonly="readonly" name="precio" id="precio" value="<?php echo $consulta[0] ?>"><br>

                        <label for="">Fecha de Entrada</label><br>
                        <input type="date" readonly="readonly" name="fechaEntrada" id="fechaEntrada" value="<?php echo $consulta[1] ?>"> <br>
                        
                        <label for="">Fecha de Entrega</label><br>
                        <input type="date" name="fechaEntrega" id="fechaEntrega"><br><br>
                        
                        <label for="">Observaciones</label><br>
                        <textarea name="observaciones" id="observaciones" cols="30" rows="10"></textarea>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Entregar</button>
                    </form>
                
            </div>


        </div>
    </body>
</html>