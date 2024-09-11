<?php

include '../php/conexion_be.php';

// Aqui verificamos si la sesión esta iniciada
if(isset($_SESSION['usuario'])){
    $email = $_SESSION['usuario'];

// Consultar los datos del usuario logueado
$busqueda = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");

// Obtener los datos del usuario
if(mysqli_num_rows($busqueda) > 0){
$resultado = mysqli_fetch_assoc($busqueda);
} else {
echo "No se encontraron datos del usuario.";
}
} else {
// Redirigir al login si no hay sesión activa
header("Location: ../vistas_html/inicio_sesion.html");
exit;
}
?>
