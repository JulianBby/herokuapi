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
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Entregar Servicio</title>
    </head>
    <body>
        <div class="todo">
            <div id="cabecera">

            </div>

            <div id="contenido">
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 1px 5px;">
                    <span><h1>Entregar Servicio</h1></span>
                    <br>
                    <form action="entregarServicio2.php" method="POST" style="border-collapse: separate; border-spacing: 1px 5px;">
                        <input type="hidden" name="idEntrada" value="<?php echo $_GET['idEntrada']?>">

                        <label for="">Precio: </label>
                        <input type="number" readonly="readonly" name="precio" id="precio" value="<?php echo $consulta[0] ?>"><br>

                        <label for="">Fecha de Entrada</label>
                        <input type="date" readonly="readonly" name="fechaEntrada" id="fechaEntrada" value="<?php echo $consulta[1] ?>">
                        
                        <label for="">Fecha de Entrega</label>
                        <input type="date" name="fechaEntrega" id="fechaEntrega"><br>
                        
                        <label for="">Observaciones</label><br>
                        <textarea name="observaciones" id="observaciones" cols="30" rows="10"></textarea>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Entregar</button>
                    </form>
                </div>
            </div>

            <div id="footer">
                <img src="imagenes/" id="img2">
            </div>
        </div>
    </body>
</html>