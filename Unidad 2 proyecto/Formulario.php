<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Contactanos</title>
</head>
<body>

    <!--Inicio header de la pagina-->
    <header class="header-formulario">
        <!--Inicio menu-->
        <div class="menu container">
            <a href="index.php" class="logo">TecNopolis</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Nosotros.html">Nosotros</a></li>
                </ul>
            </nav>
                    <a href="LoginYRegistro.php" class="btn-1">Login</a>
        </div>
    <!--Fin menu-->        
     </header>
    <!--Fin del header de la pagina-->

    <!--Inicio del formulario-->
    <section class="form container">
        <hr>
        <form class="formulario">
            <fieldset>
                <legend>Contactanos llenando todos los campos</legend>
                <div class="contenedor-campos">
                <div class = "campo">
                    <label>Nombre:</label>
                    <input class="input-text" type = "text" placeholder="Nombre">
                    <hr class="formHr">
                </div>

                <div class="campo">
                    <label>Teléfono:</label>
                    <input class="input-text" type = "tel" placeholder = "Telefono">
                    <hr class="formHr">
                </div>

                <div class="campo">
                    <label>Correo:</label>
                    <input class="input-text" type = "email" placeholder = "Email">
                    <hr class="formHr">
                </div>

                <div class="campo">
                    <label>Mensaje</label>
                    <textarea class="input-text"></textarea>
                    <hr class="formHr">
                </div>
            </div> <!--.contenedor-campos-->
                <div class="alinear-derecha" >
                    <input class="boton w-100" type = "submit" value = "Enviar">
                </div>
            </fieldset>
        </form>
    </section>
    <!--Fin del formulario-->

    <!--Inicio del footer-->
    <!--Inicio footer-->
    <footer class="footer container">
        <h3>TecNopolis</h3>
        <br>
        <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="Nosotros.html">Nosotros</a></li>
        </ul>
       </footer>
        <!--Fin footer-->
    <!--Fin del footer-->
    
</body>
</html>