<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web Moderna</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <!-- NAVBAR transparente, fija y con efecto al hacer scroll -->
    <header class="navbar">
        <nav>
            <ul>
                <li><a href="inicio">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Especialidades</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Chat</a></li>
            </ul>
        </nav>
    </header>

    <!-- IMAGEN PRINCIPAL (rotará luego con otras) -->
    <section class="hero">
        <img src="img/imagenPrincipal.jpg" alt="Imagen principal">
        <!-- Aquí puedes agregar más imágenes para rotar -->
        <!-- Ejemplo: <img src="img/otraImagen.jpg" class="oculta"> -->
    </section>

    <!-- DIVISIÓN NEGRA CON TEXTO E IMÁGENES -->
    <section class="info-seccion">
        <div class="contenedor-negro">
            <div class="imagenes">
                <img src="img/imgSup.jpg" alt="Imagen superior" class="img-superior">
                <img src="img/imgInf.jpg" alt="Imagen inferior" class="img-inferior">
                <!-- Puedes ajustar el tamaño con width y height en CSS -->
            </div>
            <div class="texto">
                <p>
                    Sabemos que tu tiempo es valioso. Por eso, hemos creado una forma rápida y sencilla de agendar tus citas médicas. Sin filas, sin llamadas, sin complicaciones. Estamos aquí para hacer tu vida más fácil y cuidar de tu salud cuando más lo necesitas.
                </p>
            </div>
        </div>
    </section>

    <!-- ICONOS TEMPORALES -->
    <section class="iconos">
        <div class="icon-placeholder"></div>
        <div class="icon-placeholder"></div>
        <div class="icon-placeholder"></div>
        <div class="icon-placeholder"></div>
    </section>

    <!-- SECCIÓN DIVIDIDA POR LÍNEA -->
    <section class="division-central">
        <hr>
        <div class="contenido-dividido">
            <p class="texto-izquierda">La salud digital está transformando el acceso a la atención médica con rapidez y eficiencia.</p>
            <img src="img/imgTexto.jpg" alt="Texto e imagen relacionada">
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 Tu Sitio. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Cambia la navbar al hacer scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scroll-activo', window.scrollY > 50);
        });
    </script>
</body>
</html>
