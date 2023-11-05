<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="StylesH.css">
</head>
<body>
        <!--Inicio header-->
        <header class="header">
            <!--Inicio menu-->
            <div class="menu container">
                <p class="logo">TecNopolis</p>
                <input type="checkbox" id="menu"/>
                <label for="menu">
                    <img src="imagenes/menu.png" class="menu-icono" alt="menu">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../Nosotros.php">Nosotros</a></li>
                        <li><a href="../Formulario.php">Contactos</a></li>
                    </ul>
                </nav>
                        <a href="../LoginYRegistro.php" class="btn-1">Login</a>
            </div>
            <!--Fin menu-->        
         </header>
         <!--Fin header-->
         <br><br><br>
         <!--Inicio sección película-->
    <section class="movie container">
        <hr>
        <!--Inicio película-->
        <div class="box-1">
            <div class="content">
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

                // Obtener la película seleccionada desde la página index 
                
                $peliculaSeleccionada = $_GET["pelicula"];

                // Realizar una consulta para obtener datos de la tabla Funcion
                $sql = "SELECT img_portada, descripcion, img_elenco, trailer, elenco FROM Funcion WHERE nombre = '$peliculaSeleccionada'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $imgPortada = $row['img_portada'];
                    $descripcion = $row['descripcion'];
                    $imgElenco = $row['img_elenco'];
                    $trailer = $row['trailer'];
                    $elenco = $row['elenco'];

                    // Mostrar los datos en la plantilla
                    echo '<img src="' . $imgPortada . '" class="portada" alt="">';
                    echo '<h3>Pelicula doblada</h3>';
                    echo '<br>';
                    echo '<p>' . $descripcion . '</p>';
                    echo '<br><br>';
                
                }
                ?>
                <h3>Elenco principal:</h3>
                <br>
                <div class="box-container-2">
                    <div class="box-2">
                        <div class="content">
                            <?php
                            // Muestra el nombre del actor
                            echo $elenco;
                            ?>
                            <br>
                            <?php
                            echo '<img src="' . $imgElenco . '" class="elenco" alt="">';
                            ?>
                        </div>
                    </div>
                    
                </div>
                <p>
                    <!--Mostrar trailer via internet-->
                    Trailer.
                    <br>
                    <iframe width="560" height="315" src="<?php echo $trailer; ?>" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="video"></iframe>
                </p>
            </div>
        </div>
        <!--Fin película-->
    </section>
            <div class="botones">
            <a href="../Pagina asientos/Pagina asientos.php" class="btn-2">Seleccion de horarios y asientos</a>
            </div> 
        <!--Fin pelicula-->
        
        <!--Inicio footer-->
         <footer class="footer container">
            <h3>TecNopolis</h3>
       
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../Nosotros.php">Nosotros</a></li>
                <li><a href="../Formulario.php">Contactanos</a></li>
            </ul>
           </footer>
         <!--Fin footer-->
</body>
</html>