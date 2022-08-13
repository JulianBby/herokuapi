<?php
    include "conexionOn.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Servicio</title>
    </head>
    <body>
        <div class="todo">
            <div id="cabecera">
            
            </div>

            <div id="contenido">
                <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                <span><h1>Nuevo Servicio</h1></span>
                <br>
                <form action="nuevoServicio2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                    <label for="">Nombre del Cliente: </label>
                    <input type="text" name="nombreCliente" id="nombreCliente"><br>

                    <label for="">Documento del Cliente: </label>
                    <input type="number" id="documentoCliente" name="documentoCliente"><br>

                    <label for="">Tipo de Prenda: </label>
                    <input type="text" id="tipoPrenda" name="tipoPrenda"><br>

                    <label for="">Servicio: </label>
                    <input type="text" id="servicio" name="servicio"><br>

                    <label for="">Precio: </label>
                    <input type="number" name="precio" id="precio"><br>

                    <label for="">Detalles: </label><br>
                    <textarea name="detalles" id="detalles" cols="30" rows="10"></textarea><br>

                    <label for="">Fecha de Entrada</label>
                    <input type="date" name="fechaEntrada" id="fechaEntrada">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
                </div>
            </div>

            <div id="footer">
            
            </div>
        </div>
    </body>
</html>