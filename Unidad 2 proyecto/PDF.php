<?php
include('user.php');
session_start(); // Inicia la sesión si no se ha iniciado aún

$nombre = $_SESSION['nombre'];
$correo = $_SESSION['cliente'];
// Almacena datos en la sesión

echo '<h2> Comprobante de pago de boletos TECNOPOLIS <br>';
echo 'Nombre: ' . $nombre . '<br>';
echo 'Correo: ' . $correo . '<br>' ;
if (isset($_GET['miValor'])) {
    $costo = $_GET['miValor'];
echo "Costo: " . $costo . '<br>';
} else {
    echo "No se recibió ningún valor en PHP.";
}
echo '<button onclick = "window.print()">Imprimir Recibo </button>';

?>