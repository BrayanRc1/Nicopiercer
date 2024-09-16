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
    <link rel="shortcut icon" href="/nicopiercer/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="/nicopiercer/css/style.css">
    <title>Nicopiercer</title>
</head>

<body>
<!-- INICIO de seccion de navbar -->
    <header class="header">
        <a href="#" class="logo">
            <img src="/nicopiercer/images/logo.jpg">
        </a>
        <nav class="navbar">
            <a href="#productos">Productos</a>
            <a href="#portafolio">Portafolio</a>
            <a href="#blogs">Blogs</a>
            <a href="#informacion">Información</a>
        </nav>
        <div class="iconos">
            <div class="fas fa-user" id="usuario"></div>
            <div class="fas fa-calendar" id="calendario"></div>
            <a href="/nicopiercer/php/cerrar_sesion.php">
                <div class="fa-solid fa-right-from-bracket"></div>
            </a>
        </div>
    </header>
<!-- FIN de seccion de navbar -->

<!-- INICIO de seccion de calendario -->
<div class="calendario">
    <div class="vista_calendario">
        <i class="fas fa-times"></i>
        <p>Agendamiento citas</p><br>
        <p>Selecciona la fecha para programar con el profesional</p><br>
        <form action="subir_foto.php" method="POST" enctype="multipart/form-data"><br>
                <input type="date" id="fecha"><br><br>
                <input type="submit" value="Agendar cita"><br><br>
                <input type="submit" value="Eliminar cita"><br><br>
            </form>
    </div>
</div>
<script src="/nicopiercer/js/calendario.js"></script>
<!-- FIN de seccion de calendario -->

<!-- INICIO de seccion de vista principal -->
    <section class="inicio" id="inicio">
        <div class="contenido">
            <h3>Agenda tu cita personalizada</h3>
        </div>
        <div>
            <video src="/nicopiercer/Multimedia/intro_main.mp4" width="450" height="550" controls muted autoplay></video>
        </div>
    </section><br><br><br><br>
<!-- FIN de seccion de vista principal -->

<!-- INICIO de seccion de joyeria -->

    <section class="procedimientos">
        <h1 class="titulo_procedimientos" id="productos">Nuestras joyas</h1>
        <div class="contenedor_principal">
            <div class="caja" data-nombre="producto1">
                <img class="imagen_procedimientos" src="/nicopiercer/images/joyeria/ASTM-1.jpg" alt="ASTM-1">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$25.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
            <div class="caja" data-nombre="producto2">
                <img class="imagen_procedimientos1" src="/nicopiercer/images/joyeria/ASTM-3.jpg" alt="ASTM-3">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$30.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
            <div class="caja" data-nombre="producto3">
                <img class="imagen_procedimientos2" src="/nicopiercer/images/joyeria/ASTM-5.jpg" alt="ASTM-5">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$60.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
            <div class="caja" data-nombre="producto4">
                <img class="imagen_procedimientos3" src="/nicopiercer/images/joyeria/ASTM-7.jpg" alt="ASTM-7">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$70.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
            <div class="caja" data-nombre="producto5">
                <img class="imagen_procedimientos4" src="/nicopiercer/images/joyeria/ASTM-9.jpg" alt="ASTM-9">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$120.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
            <div class="caja" data-nombre="producto6">
                <img class="imagen_procedimientos5" src="/nicopiercer/images/joyeria/ASTM-11.jpg" alt="ASTM-11">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$130.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
            <div class="caja" data-nombre="producto7">
                <img class="imagen_procedimientos6" src="/nicopiercer/images/joyeria/ASTM-13.jpg" alt="ASTM-13">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$90.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
            <div class="caja" data-nombre="producto8">
                <img class="imagen_procedimientos7" src="/nicopiercer/images/joyeria/ASTM-15.jpg" alt="ASTM-15">
                <h3>Pieza ASTM-F136 de titanio</h3>
                <div class="precio">$150.000</div>
                <a href="" class="boton">Más detalles</a>
            </div>
        </div>
    </section><br><br><br><br>

    <div class="vista_producto">
        <div class="vista_previa" data-target="producto1">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-1.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$25.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>

        <div class="vista_previa" data-target="producto2">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-3.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$30.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>

        <div class="vista_previa" data-target="producto3">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-5.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$60.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>

        <div class="vista_previa" data-target="producto4">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-7.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$70.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>

        <div class="vista_previa" data-target="producto5">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-9.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$120.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>

        <div class="vista_previa" data-target="producto6">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-11.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$130.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>

        <div class="vista_previa" data-target="producto7">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-13.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$90.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>

        <div class="vista_previa" data-target="producto8">
            <i class="fas fa-times"></i>
            <img src="/nicopiercer/images/joyeria/ASTM-15.jpg">
            <h3>Pieza ASTM-F136 de titanio</h3>
            <div class="precio">$150.000</div>
            <div class="botones">
                <a href="#" class="comprar">Comprar ahora</a>
                <a href="#" class="agregar">Agregar al carrito</a>
            </div>
        </div>
    </div>
    <script src="/nicopiercer/js/productos.js"></script>
<!-- FIN de seccion de joyeria -->

<!-- INICIO de seccion de perfil -->

<?php 
    include("../php/conexion_be.php");
    include("../php/perfil.php");
    include("../php/imagen_perfil.php");
?>

<?php 
$busqueda = mysqli_query($conexion, "SELECT* FROM usuarios");
?>
    <div class="perfil">
        <div class="vista_perfil">
            <i class="fas fa-times"></i>
            <p>Perfil usuario</p><br>
            <?php if(isset($resultado)){ ?>
                <p>Usuario: <?php echo htmlspecialchars($resultado['name']); ?></p>
                <p>Email: <?php echo htmlspecialchars($resultado['email']); ?></p><br>
            <?php } else { ?>
                <p>No se encontraron datos del usuario.</p>
            <?php } ?>
            <?php if(isset($resultado['foto_perfil'])){
            echo "<img src='".$resultado['foto_perfil']."' alt='Foto de perfil' style='width: 150px; height: 150px;'>";
            } else {
            echo "<img src='/nicopiercer/images/imagen_usuario.jpg' alt='Foto de perfil predeterminada' style='width: 150px; height: 150px;'>";
            }
            ?>
            <br>
            <form action="subir_foto.php" method="POST" enctype="multipart/form-data"><br>
                <label for="foto">Foto de perfil:</label>
                <input type="file" name="foto" id="foto" accept="image/*">
                <input type="submit" value="Subir Foto"><br><br>
                <a href="#" class="comprar">Eliminar Cuenta</a>
            </form>
        </div>
    </div>
    <script src="/nicopiercer/js/perfil.js"></script>
<!-- FIN de seccion de perfil -->

<!-- INICIO de seccion de Portafolio y procedimientos -->
    <section class="portafolio">
        <h1 class="titulo_procedimientos" id="portafolio">Portafolio y procedimientos</h1>
        <div class="contenedor_portafolio">
            <div class="caja_portafolio">
                <h3>Les quiero compartir el resultado de este proyecto donde realizamos un #traguspiercing y también
                    #helixpiercing utilizamos piezas de titanio grado implante ASTM-F136.</h3>
                <video id="video" src="/nicopiercer/Multimedia/portafolio/video1.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>En esta ocasión quiero compartir este lindo navel piercing que realice, decorado con una pieza de
                    titanio grado implante ASTM-F136 y cristales blancos ✨</h3>
                <video id="video" src="/nicopiercer/Multimedia/portafolio/video2.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Lindo #eyebrowpiercing que realice con una pieza de titanio grado implante ASTM-F136 tono natural,
                    lo básico luce elegante✨</h3>
                <video id="video" src="/nicopiercer/Multimedia/portafolio/video3.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Les dejo por acá este lindo #microdermalpiercing que realice con una pieza de titanio grado implante
                    ASTM-F136 tono natural, ornamentado con aplique de cristal blanco ✨ para mi bro @tattoo_krizthian
                    gracias por la confianza.</h3>
                <video id="video" src="/nicopiercer/Multimedia/portafolio/video4.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Les dejo un lindo #traguspiercing donde utilizamos una pieza de titanio grado implante con un mini
                    cluster tres cristales verdes engastados y anodizada a Gold (65V). Espero que les guste. ✨</h3>
                <video id="video" src="/nicopiercer/Multimedia/portafolio/video5.mp4" width="400" height="350" muted
                    controls></video>
            </div>
            <div class="caja_portafolio">
                <h3>Les comparto parte de este proyecto cicatrizado en el cual actualizamos las piezas, luciendo Joyeria
                    certificada de titanio grado ASTM-F136 Bat top y Cliker triple ✨</h3>
                <video id="video" src="/nicopiercer/Multimedia/portafolio/video6.mp4" width="400" height="350" muted
                    controls></video>
            </div>
        </div>
        <script src="/nicopiercer/js/video.js"></script>
    </section><br><br><br><br>
<!-- FIN de seccion de Portafolio y procedimientos -->

<!-- INICIO de seccion de Blogs y comentarios -->
    <section class="imagen_blog">
        <h1 class="titulo_procedimientos" id="blogs">Blogs y comentarios</h1>
        <div class="contenedor_blog">
            <div class="caja_blog">
                <img class="imagen_blog1" src="/nicopiercer/images/reseñas/reseña2.png" alt="reseña2">
            </div>
            <div class="caja_blog">
                <img class="imagen_blog2" src="/nicopiercer/images/reseñas/reseña4.png" alt="reseña4">
            </div>
            <div class="caja_blog">
                <img class="imagen_blog3" src="/nicopiercer/images/reseñas/reseña6.png" alt="reseña6">
            </div>
            <div class="caja_blog">
                <img class="imagen_blog4" src="/nicopiercer/images/reseñas/reseña8.png" alt="reseña6">
            </div>
        </div>
    </section><br><br><br><br>
<!-- FIN de seccion de Blogs y comentarios -->

<!-- INICIO de seccion de Información -->
    <section class="informacion">
        <h1 id="informacion">Información</h1>
        <div class="contenedor_info">
            <div class="columna_izquierda">
                <h2 class="h2_info">Antes de cada sesión</h2>
                <video src="/nicopiercer/Multimedia/Intro_nicopiercer.mp4" width="500" height="500" muted controls autoplay></video>
            </div>
            <div class="columna_derecha">
                <h1 class="titulo_info">Nuestro servicio</h1>
                <article>
                    <p>En nuestro estudio de perforaciones, nos comprometemos a brindar un servicio seguro y
                        profesional. Todos nuestros procedimientos son realizados con equipo esterilizado y materiales
                        de la más alta calidad. Seguimos estrictas normas de higiene y seguridad para garantizar que
                        cada perforación sea no solo una experiencia estética, sino también segura para tu salud.
                        Nuestro equipo está altamente capacitado y utiliza técnicas de perforación modernas para
                        asegurar resultados precisos y cómodos. Tu bienestar es nuestra prioridad, por lo que puedes
                        confiar en que recibirás un servicio que cumple con los más altos estándares de calidad y
                        seguridad.</p>
                </article>
            </div>
        </div>
    </section>

    <section>
        <div class="contacto_footer">
            <div class="caja_imagen">
                <div>
                    <img src="/nicopiercer/images/logo.jpg">
                    <img src="/nicopiercer/images/logo2.jpg">
                    <img src="/nicopiercer/images/logo3.jpg">
                </div>
            </div>
            <div class="cajas_footer">
                <h4>Contactanos</h4>
                <p>
                    Carrera 7 # 45-10 La javeriana.<br>
                    Bogotá Colombia.<br>
                    Nicolas.fajardo@gmail.com<br>
                    +57 320 2084032<br>
                </p>
            </div>
            <div class="cajas_footer">
                <iframe class="mapa"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d295.57666015043543!2d-74.06398111644987!3d4.631579781442376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sco!4v1724817515964!5m2!1sen!2sco"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>Visita nuestras redes.</p>
        <div class="redes">
            <a href="https://web.facebook.com/Mickey.EP" class="fab fa-facebook" target="_blank"></a>
            <a href="https://www.instagram.com/nicopiercer__/" class="fab fa-instagram" target="_blank"></a>
            <a href="https://www.tiktok.com/@nicopiercer" class="fab fa-tiktok" target="_blank"></a>
        </div>
        <div class="creditos">Creado por <span>Brayan Ramirez</span> 2024 | Todos los derechos reservados.</div>
    </footer>
<!-- FIN de seccion de Información -->
</body>

</html>