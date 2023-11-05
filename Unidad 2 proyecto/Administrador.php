<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de admininstrador</title>
    <link rel="stylesheet" href="StyleAdmin.css">
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
                    <a href="LoginYRegistro.php" class="btn-1">Login</a>
        </div>
        <!--Fin menu-->        
     </header>
     <!--Fin header-->

     <!--Inicio formulario de carga de peliculas-->
     <section class="form container">
        <form action="Admin.php" method="post" class="formulario">
            <fieldset>
            <legend>Carga de nuevas funciones</legend>
            <div class="contenedor-campos">
            
            <div class="campo">
            <label>Id funcion:</label><br>
            <input type="text" id="id_funcion" name="id_funcion" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Id sala:</label><br>
            <input type="text" id="id_sala" name="id_sala" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Nombre de la película:</label><br>
            <input type="text" id="nombre_pelicula" name="nombre_pelicula" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Fecha de la pelicula:</label><br>
            <input type="text" id="fecha_pelicula" name="fecha_pelicula" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Elenco:</label><br>
            <input type="text" id="elenco_pelicula" name="elenco_pelicula" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Enlace trailer:</label><br>
            <input type="text" id="enlace_trailer" name="enlace_trailer" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Descripción de la película:</label><br>
            <textarea id="descripcion_pelicula" name="descripcion_pelicula" rows="4" cols="50" required class="input-text"></textarea><br><br>
            </div>

            <div class="campo">
            <label>Cargar imágen de la portada:</label><br>
            <input type="text" id="imagenes_pelicula" name="imagenes_pelicula" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Cargar imágenes del elenco:</label><br>
            <input type="text" id="imagenes_elenco" name="imagenes_elenco" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Horario:</label><br>
            <input type="text" id="horarios_pelicula" name="horarios_pelicula" required class="input-text"><br><br>
            </div>

            <div class="campo">
            <label>Precio de la película:</label><br>
            <input type="text" id="precio_pelicula" name="precio_pelicula" required class="input-text"><br><br>
            </div>
            <input type="submit" name="cargar" value="Cargar" class="cargar" >
            <input type="submit" value="Eliminar" class="eliminar" name="eliminar">
            <input type="submit" value="Modificar" class="modificar" name="modificar">
            </div>
            </fieldset>
        </form>        
     </section>
      <!--Fin de formulario de carga de peliculas-->

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