<?php

session_start();

include 'conexion_be.php';

$email = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$validacion_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'");

if(mysqli_num_rows($validacion_login) > 0 ){
    $_SESSION['usuario'] = $email;
    header("location: ../vistas_html/main.php");
    exit;
} else {
    echo'
    <script>
    alert("El usuario no existe, puede crear una cuenta nueva o verifique sus datos.");
    window.location = "../vistas_html/crear_cuenta.html";
    </script>
    ';
    exit;
}

?>