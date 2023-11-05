<?php
    include("conexion.php");

    if(isset($_POST['register'])){
        if(
            strlen($_POST['id']) >= 1 &&
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['password']) >= 1 &&
            strlen($_POST['phone']) >= 1 
            ){
                $id = trim($_POST['id']);
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $phone = trim($_POST['phone']);

                $consulta = "INSERT INTO Cliente (id_cliente, nombre, correo, telefono, contraseña) 
                VALUES ('$id', '$name', '$email', '$phone', '$password')";

                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    echo '<script>alert("Se ha registrado correctamente");</script>';
                }else {
                    echo '<script>alert("Ocurrio un error");</script>';
                }
        }else{
            echo '<script>alert("Complete los campos");</script>';
        }
    }
?>