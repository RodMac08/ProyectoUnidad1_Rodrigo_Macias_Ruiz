<?php
include ('user.php');
session_start();

$correoL = $_POST['emailL'];
$contra = $_POST['passwordL'];
$nombre = $_POST['nameL'];

if ($correoL == "admin@gmail.com" && $contra == "admin"){
    header("Location: Administrador.php");
}

$validacion = mysqli_query($conexion, "SELECT * FROM Cliente WHERE correo = '$correoL' AND contraseña = '$contra'");

if(mysqli_num_rows($validacion)){
    $_SESSION['cliente'] = $correoL;
    $_SESSION['nombre'] = $nombre;
    header("Location: index.php");
}else{
    echo '<script>alert("Acceso denegado!!!");</script>';
}
?>