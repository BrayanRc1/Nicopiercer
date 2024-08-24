<?php

//importamos la variable conexion_be.php de la carpeta php. 
include 'conexion_be.php';

//Aqui se define los nombres creados desde la tabla en el index.html estos deben coincidir en la base de datos. 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha512', $password); //hash nos yuda en encriptar las contraseñas y el 'sha512' nos da la cadena de texto extensa para que sea mas segura.

//La variable $query nos indica que vamos a insertar informacion en la base llamada 'usuarios'. Esta informacion debe estar igual en ambos lados.
$query = "INSERT INTO usuarios (name, email, password) 
        VALUES ('$name', '$email', '$password')";

//La variable $verificar_correo, nos ayuda a que no se repita el correo en la base de datos.
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");

//Esta condicional nos sirve para comparar la informacion ingresada en el campo de correo.
if(mysqli_num_rows ($verificar_correo) > 0 ){
    echo '
    <script>
    alert ("Este correo ya está registrado, intente con otro diferente.");
    window.location = "../vistas_html/crear_cuenta.html";
    </script>
    ';
    exit();
}

//La variable $ejecutar, establece conexion con la base de datos y ejecuto al mismo tiempo la base a la que vamos a ingresar información.
$ejecutar = mysqli_query($conexion, $query);

//Condicional para que nos muestre el estado del registro y nos envie a otra pantalla.
if($ejecutar){
    echo'
    <script>
        alert("Usuario registrado exitosamente.");
        window.location = "../vistas_html/inicio_sesion.html";
    </script>
    ';
}else{
    echo '
    <script>
        alert("Usuario no registrado intentelo nuevamente.");
        window.location = "../vistas_html/crear_cuenta.html";
    </script>
    ';
}

//Cierra la conexión.
mysqli_close($conexion);

?>