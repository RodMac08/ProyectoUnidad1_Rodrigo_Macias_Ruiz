<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Nosotros</title>
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Formulario.php">Contactanos</a></li>
                </ul>
            </nav>
                    <a href="LoginYRegistro.php" class="btn-1">Login</a>
        </div>
    <!--Fin menu-->        
     </header>
    <!--Fin del header de la pagina-->

    <!--Inicio descripcion-->
    <section class="movies container">
        <h2>Informacion de la pagina web</h2>
        <hr>
        <div class="box-container-1">
            <!--Inicio primera pelicula-->
            <div class="box-1">
                <div class="content">
                    <h3>Nosotros</h3>
                    <br>
                    <p> Proyecto creado por: Rodrigo Macias Ruiz (21131531) y dios. </p>
                    <p> Proyecto unidad 1: Realización de pagina web (solo front-end). </p>
                    <p> Fecha de entrega: 24/09/2023. </p>
                    <p> Materia: Programacion web 13:00 hrs </p>
                    <p> Docente: Ana Lilia Urbina Amador </p>
                </div>
            </div>
    </section>
    <!--Fin descripcion-->

    <!--Inicio footer-->
    <footer class="footer container">
        <h3>TecNopolis</h3>
        <br>
        <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="Formulario.php">Contactanos</a></li>
        </ul>
       </footer>
    <!--Fin footer-->

</body>
</html>