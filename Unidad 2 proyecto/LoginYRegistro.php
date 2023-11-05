<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="StyleRegistro.css">
</head>
<body>
    <!--Inicio header-->
    <header class="header">
        <!--Inicio menu-->
        <div class="menu container">
            <a href="index.html" class="logo">TecNopolis</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="Formulario.php">Contactanos</a></li>
                </ul>
            </nav>
        </div>
        <!--Fin menu-->        
     </header>
     <!--Fin header-->

    <!--Inicio del formulario de registro--> 
    <form method="post">
    <p>Inicia tu registro</p>

    <div class = "input-wrapper">
        <input type="text" name="id" placeholder="id personalizado">
    </div>

    <div class = "input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
    </div>

    <div class = "input-wrapper">
        <input type="text" name="email" placeholder="Correo">
    </div>

    <div class = "input-wrapper">
        <input type="password" name="password" placeholder="Contraseña">
    </div>

    <div class = "input-wrapper">
        <input type="tel" name="phone" placeholder="Telefono">
    </div>

    <input class="btn" type="submit" name="register" value="Registrarse">
    </form method = "post">
    <!--Fin del formulario de registro-->
    <br><br>
    <h2>O</h2>
    <!--Inicio del formulario de inicio-->
    <form  action= "controlador.php" method="post">
    <p>Inicia sesión</p>
    <?php
    include ("user.php");
    include ("controlador.php");
    ?>
    <div class = "input-wrapper">
        <input type="text" name="nameL" placeholder="Nombre">
    </div>
    
    <div class = "input-wrapper">
        <input type="email" name="emailL" placeholder="Correo">
    </div>

    <div class = "input-wrapper">
        <input type="password" name="passwordL" placeholder="Contraseña">
    </div>

    <input class="btn" type="submit" name="login" value="Iniciar sesión">
    </form>
    
     <?php
    include("RegistrarPag.php");
    ?>
</body>
</html>