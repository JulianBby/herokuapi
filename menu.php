<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/menu.css">
    <script src="https://kit.fontawesome.com/691d48a54d.js" crossorigin="anonymous"></script>
</head>
<body class="menu">
    <header class="menu">
        <div class="icon__menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>

    <div class="menu__side">

        <div class="options__menu">
        
            <a href="../entradas.php">
                <div class="option">
                    <i class="fa-solid fa-shirt" title="Entradas"></i>
                    <h4>Entradas</h4>
                </div>
            </a>

            <a href="../salidas.php">
                <div class="option">
                    <i class="fa-solid fa-hand-holding-dollar" title="Salidas"></i>
                    <h4>Salidas</h4>
                </div>
            </a>
            <!--
            <a href="../inventario.php">
                <div class="option">
                    <i class="fa-solid fa-boxes-stacked" title="Inventario"></i>
                    <h4>Inventario</h4>
                </div>
            </a>

            <a href="../empleados.php">
                <div class="option">
                    <i class="fa-solid fa-address-book" title="Empleados"></i>
                    <h4>Empleados</h4>
                </div>
            </a>
        -->    
            <a onclick="document.getElementById('myform').submit();">
                <div class="option">
                    <i class="fa-solid fa-arrow-right-from-bracket" title="Salir"></i>
                    <form id="myform" action="../basededatos/controller_login.php" method="post">
                        <input type="hidden" name="salir">
                    </form>
                    <h4>Salir</h4>
                </div>
            </a>

        </div>
    </div>
</body>
</html>