<?php
include 'conexion_be.php';

if(isset($_FILES['foto']) && isset($_SESSION['usuario'])){
    $email = $_SESSION['usuario'];
    $foto = $_FILES['foto'];

    $directorio = "/nicopiercer/images/imagen_usuario";
    
    // Asegurarse de que la carpeta exista
    if (!is_dir($directorio)) {
        mkdir($directorio, 0777, true);
    }
    
    // Nombre único para la foto
    $nombreArchivo = $directorio . uniqid() . "_" . basename($foto["name"]);
    $tipoArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

    // Verificar que el archivo sea una imagen
    $esImagen = getimagesize($foto["tmp_name"]);

    if($esImagen !== false) {
        // Limitar los tipos de archivos permitidos
        if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png" || $tipoArchivo == "gif") {
            // Mover el archivo a la carpeta
            if(move_uploaded_file($foto["tmp_name"], $nombreArchivo)){
                // Guardar la ruta de la imagen en la base de datos
                $query = "UPDATE usuarios SET foto_perfil = '$nombreArchivo' WHERE email = '$email'";
                if(mysqli_query($conexion, $query)){
                    echo "La foto de perfil ha sido subida exitosamente.";
                } else {
                    echo "Error al actualizar la base de datos.";
                }
            } else {
                echo "Error al subir el archivo.";
            }
        } else {
            echo "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
        }
    } else {
        echo "El archivo no es una imagen.";
    }
} else {
    /*echo "No se ha enviado ninguna imagen o no hay sesión activa.";*/
}
?>