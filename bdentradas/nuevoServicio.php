<?php
    include "conexion.php";
    include "../menu.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Servicio</title>
        <link rel="stylesheet" href="../styles/formularioNuevoServicio.css">
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
                    <label for="">Nombre del Cliente: </label><br>
                    <input type="text" name="nombreCliente" id="nombreCliente"><br><br><br>

                    <label for="">Documento del Cliente: </label><br>
                    <input type="number" id="documentoCliente" name="documentoCliente"><br><br><br>

                    <label for="">Tipo de Prenda: </label><br>
                    <input type="text" id="tipoPrenda" name="tipoPrenda"><br><br><br>

                    <label for="">Servicio: </label><br>
                    <input type="text" id="servicio" name="servicio"><br><br><br>

                    <label for="">Precio: </label><br>
                    <input type="number" name="precio" id="precio"><br><br><br>

                    <label for="">Detalles: </label><br>
                    <textarea name="detalles" id="detalles" cols="30" rows="10"></textarea><br><br><br>

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