<?php
    $consulta = consultaProducto($_GET['idEntrada']);

    function consultaProducto($idEntrada){
        include "conexion.php";
        $sentencia = "SELECT * FROM entradas WHERE idEntrada='".$idEntrada."' ";
        $resultado = $conexion->query($sentencia) or die ("Error al consultar el producto".mysqli_error($conexion));
        $fila = $resultado->fetch_assoc();

        return [
            $fila['nombreCliente'],
            $fila['documentoCliente'],
            $fila['tipoDePrenda'],
            $fila['servicio'],
            $fila['precio'],
            $fila['detalles'],
            $fila['fechaEntrada'],
        ];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Servicio</title>
        <link rel="stylesheet" href="formularioNuevoServicio.css">
    </head>
    <body>
        <div class="todo">
            <div id="cabecera">
                <img src="imagenes/" width="1188" id="img1">
            </div>

            <div id="contenido">
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 1px 5px;">
                    <span><h1>Modificar Servicio</h1></span>
                    <br>
                    <form action="modificarServicio2.php" method="POST" style="border-collapse: separate; border-spacing: 1px 5px;">
                        <input type="hidden" name="idEntrada" value="<?php echo $_GET['idEntrada']?>">
                        <label for="">Nombre del Cliente: </label>
                        <input type="text" name="nombreCliente" id="nombreCliente" value="<?php echo $consulta[0] ?>"><br>

                        <label for="">Documento del Cliente: </label>
                        <input type="number" id="documentoCliente" name="documentoCliente" value="<?php echo $consulta[1] ?>"><br>

                        <label for="">Tipo de Prenda: </label>
                        <input type="text" id="tipoPrenda" name="tipoPrenda" value="<?php echo $consulta[2] ?>"><br>

                        <label for="">Servicio: </label>
                        <input type="text" id="servicio" name="servicio" value="<?php echo $consulta[3] ?>"><br>

                        <label for="">Precio: </label>
                        <input type="number" name="precio" id="precio" value="<?php echo $consulta[4] ?>"><br>

                        <label for="">Detalles: </label><br>
                        <textarea name="detalles" id="detalles" cols="30" rows="10" ><?php echo $consulta[5] ?></textarea><br>

                        <label for="">Fecha de Entrada</label>
                        <input type="date" name="fechaEntrada" id="fechaEntrada" value="<?php echo $consulta[6] ?>">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </form>
                </div>
            </div>

            <div id="footer">
                <img src="imagenes/" id="img2">
            </div>
        </div>
    </body>
</html>