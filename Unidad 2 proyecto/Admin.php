<?php
$servername = "localhost";
$username = "id21441003_rodrigomacias08";
$password = "Mara081103*";
$database = "id21441003_cine";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

    $id_funcion = $_POST["id_funcion"];
    $id_sala = $_POST["id_sala"];
    $nombre = $_POST["nombre_pelicula"];
    $fecha_pelicula = $_POST["fecha_pelicula"];
    $descripcion = $_POST["descripcion_pelicula"];
    $horarios = $_POST["horarios_pelicula"];
    $precio = $_POST["precio_pelicula"]; 
    $elenco = $_POST["elenco_pelicula"];
    $imgElenco = $_POST["imagenes_elenco"];
    $imgPortada = $_POST["imagenes_pelicula"];
    $enlaceTrailer = $_POST["enlace_trailer"];

if(isset($_POST["cargar"])){
    
    
    $sql = "INSERT INTO Funcion (id_funcion, id_sala, nombre, fecha_pelicula, descripcion, horarios, precio, elenco, img_elenco, img_portada, trailer)
    VALUES ('$id_funcion', '$id_sala', '$nombre', '$fecha_pelicula', '$descripcion', '$horarios', $precio, '$elenco', '$imgElenco', '$imgPortada', '$enlace_trailer')";

    
    if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Se ha registrado correctamente");</script>';
} else {
    echo "Error al insertar datos: " . $conn->error;
}
}else if (isset($_POST["eliminar"])){
    $id_funcion_a_eliminar = $_POST["id_funcion"];


    $sql = "DELETE FROM Funcion WHERE id_funcion = $id_funcion_a_eliminar";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Registro eliminado con exito");</script>';
} else {
    echo '<script>alert("Error al eliminar el registro");</script>' . $conn->error;
}
}else if (isset($_POST["modificar"])){
    $id_funcion_a_modificar = $_POST["id_funcion"];

    $nombre = $_POST["nombre_pelicula"];
    $fecha_pelicula = $_POST["fecha_pelicula"];
    $descripcion = $_POST["descripcion_pelicula"];
    $horarios = $_POST["horarios_pelicula"];
    $precio = $_POST["precio_pelicula"]; 
    $elenco = $_POST["elenco_pelicula"];
    $imgElenco = $_POST["imagenes_elenco"];
    $imgPortada = $_POST["imagenes_pelicula"];
    $enlaceTrailer = $_POST["enlace_trailer"];
    $sql = "UPDATE Funcion 
        SET nombre = '$nombre', fecha_pelicula = '$fecha_pelicula', descripcion = '$descripcion', horarios = '$horarios', precio = '$precio', elenco = '$elenco', img_elenco = '$imgElenco', img_portada = '$imgPortada' , trailer = '$enlaceTrailer' 
        WHERE id_funcion = $id_funcion_a_modificar";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Se ha modificado correctamente");</script>';
} else {
    echo '<script>alert("Error al modificar el registro");</script>' . $conn->error;
}
}

$conn->close();


?>