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
    <link rel="stylesheet" href="/css/style.css">
    <title>Nicopiercer</title>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="/images/logo.jpg">
        </a>
        <nav class="navbar">
            <a href="#">Productos</a>
            <a href="#">Portafolio</a>
            <a href="#">Blogs</a>
            <a href="#">Información</a>
        </nav>
        <div class="iconos">
            <a href="/vistas_html/inicio_sesion.html">
                <div class="fas fa-user" id="usuario"></div>
            </a>
            <div class="fas fa-calendar" id="citas"></div>
            <a href="/php/cerrar_sesion.php">
                <div class="fa-solid fa-right-from-bracket"></div>
            </a>
        </div>
    </header>

    <section class="inicio" id="inicio">
        <div class="contenido">
            <h3>Agenda tu cita personalizada</h3>
        </div>
        <div>
            <video src="/Multimedia/intro_main.mp4" autoplay width="450" height="550" controls muted></video>
        </div>
    </section><br><br><br><br>

    <section class="procedimientos">
        <h1 class="titulo_procedimientos">Nuestras joyas</h1>
        <div class="contenedor_principal">
            <div class="caja">
                <img class="imagen_procedimientos" src="/images/joyeria/ASTM-1.jpg" alt="ASTM-1">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$25.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos1" src="/images/joyeria/ASTM-3.jpg" alt="ASTM-3">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$30.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos2" src="/images/joyeria/ASTM-5.jpg" alt="ASTM-5">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$60.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos3" src="/images/joyeria/ASTM-7.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$70.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos4" src="/images/joyeria/ASTM-9.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$120.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos5" src="/images/joyeria/ASTM-11.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$130.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos6" src="/images/joyeria/ASTM-13.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$90.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
            <div class="caja">
                <img class="imagen_procedimientos7" src="/images/joyeria/ASTM-15.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$150.000</div>
                <a href="#" class="boton">Más detalles</a>
            </div>
        </div>
    </section><br><br><br><br>

    <section class="portafolio">
        <h1 class="titulo_procedimientos">Portafolio y procedimientos</h1>
        <div class="contenedor_portafolio">
            <div class="caja_portafolio">
                <h3>Les quiero compartir el resultado de este proyecto donde realizamos un #traguspiercing y también
                    #helixpiercing utilizamos piezas de titanio grado implante ASTM-F136.</h3>
                <video id="video" src="/Multimedia/portafolio/video1.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>En esta ocasión quiero compartir este lindo navel piercing que realice, decorado con una pieza de
                    titanio grado implante ASTM-F136 y cristales blancos ✨</h3>
                <video id="video" src="/Multimedia/portafolio/video2.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Lindo #eyebrowpiercing que realice con una pieza de titanio grado implante ASTM-F136 tono natural,
                    lo básico luce elegante✨</h3>
                <video id="video" src="/Multimedia/portafolio/video3.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Les dejo por acá este lindo #microdermalpiercing que realice con una pieza de titanio grado implante
                    ASTM-F136 tono natural, ornamentado con aplique de cristal blanco ✨ para mi bro @tattoo_krizthian
                    gracias por la confianza.</h3>
                <video id="video" src="/Multimedia/portafolio/video4.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Les dejo un lindo #traguspiercing donde utilizamos una pieza de titanio grado implante con un mini
                    cluster tres cristales verdes engastados y anodizada a Gold (65V). Espero que les guste. ✨</h3>
                <video id="video" src="/Multimedia/portafolio/video5.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Les comparto parte de este proyecto cicatrizado en el cual actualizamos las piezas, luciendo Joyeria
                    certificada de titanio grado ASTM-F136 Bat top y Cliker triple ✨</h3>
                <video id="video" src="/Multimedia/portafolio/video6.mp4" width="400" height="350" muted
                    controls></video>
            </div>
        </div>
        <script src="/js/script.js"></script>
    </section><br><br><br><br>

    <section class="imagen_blog">
        <h1 class="titulo_procedimientos">Blogs y comentarios</h1>
        <div class="contenedor_blog">
            <div class="caja_blog">
                <img class="imagen_blog1" src="/images/reseñas/reseña2.png" alt="reseña2">
            </div>
            <div class="caja_blog">
                <img class="imagen_blog2" src="/images/reseñas/reseña4.png" alt="reseña4">
            </div>
            <div class="caja_blog">
                <img class="imagen_blog3" src="/images/reseñas/reseña6.png" alt="reseña6">
            </div>
            <div class="caja_blog">
                <img class="imagen_blog4" src="/images/reseñas/reseña8.png" alt="reseña6">
            </div>
        </div>
    </section><br><br><br><br>

    <section class="">
        <h1>Información</h1>
        <div class="contenedor_info">
            <div class="columna_izquierda">
                <h2 class="h2_info">Antes de cada sesión</h2>
                <video src="/Multimedia/Intro_nicopiercer.mp4" width="400" height="400" muted controls autoplay></video>
            </div>
            <div class="columna_derecha">
                <h1 class="titulo_info">Nuestro servicio</h1>
                <article>
                    <p>En nuestro estudio de perforaciones, nos comprometemos a brindar un servicio seguro y profesional. Todos nuestros procedimientos son realizados con equipo esterilizado y materiales de la más alta calidad. Seguimos estrictas normas de higiene y seguridad para garantizar que cada perforación sea no solo una experiencia estética, sino también segura para tu salud. Nuestro equipo está altamente capacitado y utiliza técnicas de perforación modernas para asegurar resultados precisos y cómodos. Tu bienestar es nuestra prioridad, por lo que puedes confiar en que recibirás un servicio que cumple con los más altos estándares de calidad y seguridad.</p>
                </article>
            </div>
        </div>
    </section><br><br><br>

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