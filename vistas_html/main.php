<?php

session_start();

if(!isset($_SESSION ['usuario'])){
    echo '
    <script>
        alert("Para poder ingresar debes iniciar sesión.");
        window.location = "/nicopiercer/vistas_html/inicio_sesion.html";
    </script>
    ';

    session_destroy();
    
    die();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/nicopiercer/css/style.css">
    <title>Nicopiercer</title>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="/nicopiercer/images/logo.jpg">
        </a>
        <nav class="navbar">
            <a href="#">Productos</a>
            <a href="#">Portafolio</a>
            <a href="#">Servicios</a>
            <a href="#">información</a>
            <a href="#">Blogs</a>
        </nav>
        <div class="iconos">
            <a href="/nicopiercer/vistas_html/inicio_sesion.html">
                <div class="fas fa-user" id="usuario"></div>
            </a>
            <div class="fas fa-calendar" id="citas"></div>
            <a href="/php/cerrar_sesion.php">
                <div class="fas fa-car"></div>
            </a>
        </div>
    </header>
    <section class="inicio" id="inicio">
        <div class="contenido">
            <h3>Contactanos y agenda cita</h3>
        </div>
    </section>
    <section class="procedimientos">
        <h1 class="titulo_procedimientos">Joyas y procedimientos</h1>
        <div class="contenedor_principal">
        <div class="caja">
                <img class="imagen_procedimientos" src="/nicopiercer/images/joyeria/ASTM-1.jpg" alt="ASTM-1">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$25.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos1" src="/nicopiercer/images/joyeria/ASTM-3.jpg" alt="ASTM-3">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$30.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos2" src="/nicopiercer/images/joyeria/ASTM-5.jpg" alt="ASTM-5">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$60.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos3" src="/nicopiercer/images/joyeria/ASTM-7.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$70.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos4" src="/nicopiercer/images/joyeria/ASTM-9.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$120.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos5" src="/nicopiercer/images/joyeria/ASTM-11.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$130.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos6" src="/nicopiercer/images/joyeria/ASTM-13.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$90.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos7" src="/nicopiercer/images/joyeria/ASTM-15.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$150.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="redes">
            <a href="https://web.facebook.com/Mickey.EP" class="fab fa-facebook" target="_blank"></a>
            <a href="https://www.instagram.com/nicopiercer__/" class="fab fa-instagram" target="_blank"></a>
            <a href="https://www.tiktok.com/@nicopiercer" class="fab fa-tiktok" target="_blank"></a>
        </div>
        <div class="creditos">Creado por <span>Brayan Ramirez</span> | Todos los derechos reservados.</div>
    </section>
</body>

</html>