<?php
// Inicia la sesión
session_start();

// Destruye la sesión
session_destroy();

// Redirige a una página de confirmación, por ejemplo, la página de inicio de sesión
header('Location: LoginYRegistro.php');
?>