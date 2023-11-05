<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecNopolis</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <!--Inicio header-->
     <header class="header">
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
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="Formulario.php">Contactanos</a></li>
                </ul>
            </nav>
                    <a href="LoginYRegistro.php" class="btn-1">Login</a>
                    <a href="CierraSesion.php" class="btn-1">Cerrar sesión</a>
        </div>
        <!--Fin menu-->        
     </header>
     <!--Fin header-->

    <!--Inicio cartelera-->
     <section class="movies container">
        <h2>Peliculas en cartelera</h2>
        <hr>
        <div class="box-container-1">
            <?php
            // Conexión a la base de datos (reemplaza con tus credenciales)
            $db_host = 'localhost';
            $db_user = 'id21441003_rodrigomacias08';
            $db_pass = 'Mara081103*';
            $db_name = 'id21441003_cine';

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Realizar una consulta para obtener datos de la tabla Funcion
            $sql = "SELECT nombre, descripcion, img_portada FROM Funcion";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $nombre = $row['nombre'];
                    $descripcion = $row['descripcion'];
                    $img_portada = $row['img_portada'];

                    // Generar dinámicamente el HTML para cada película
                    echo '<div class="box-1">';
                    echo '<div class="content">';
                    echo '<img src="' . $img_portada . '" class="portada" alt="' . $nombre . '">';
                    echo '<h3>' . $nombre . '</h3>';
                    echo '<br>';
                    echo '<p>' . $descripcion . '</p>';
                    echo '<div class="botones-1">';
                    echo '<a href="Paginas horarios/Horario.php?pelicula=' . $nombre . '" class="btn-2" name="' . $nombre . '">Ver horarios</a>';

                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No hay películas disponibles en cartelera.</p>";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </div>
     </section>
     <br><br>
     <!--Fin cartelera-->
     
     <!--Inicio footer-->
     <footer class="footer container">
     <h3>TecNopolis</h3>
     <br>
     <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="Nosotros.php">Nosotros</a></li>
        <li><a href="Formulario.php">Contactanos</a></li>
     </ul>
    </footer>
     <!--Fin footer-->
     
</body>
</html>