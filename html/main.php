<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/script1.js"></script>
    <script src="../js/script.js"></script>
    <title>Registro Fungí</title>
    <link rel="stylesheet" href="../css/bie.css">


    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body>

    <nav class="navbar">
        <div class="navbar-logo">
            <img class="logo" src="../img/LogoFungi.png" alt="Logo">

        </div>
        <div>
            <h1>FUNGI EXPLORER</h1>
        </div>

        <ul class="navbar-menu">

            <li><a href="#" onclick="cambiarContenido(event, 'contenido-registro')" class="nav-button">Registrar
                    Hongo</a></li>
            <li>Bienvenido</li>
            <li>

                <?php
                // Mostrar el nombre de usuario si está presente en el parámetro de la URL
                if (isset($_GET["nombre"])) {
                    $nombreUsuario = $_GET["nombre"];
                    echo "<h4>$nombreUsuario</h4>";
                } else {
                    echo "Usuario no identificado";
                }
                ?>
            </li>

            <li class="navbar-dropdown">
                <button class="navbar-dropdown-toggle" onclick="toggleDropdownMenu()">
                    <img class="logou" src="../img/usuario.png" alt="Foto de usuario" class="user-photo">
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="navbar-dropdown-menu" id="dropdown-menu">
                    <li><a href="../index.php" id="configuracion">Cerrar sesión</a></li>

                </ul>
            </li>
        </ul>
    </nav>
    <div class="main-container">
        <div class="sidebar">
            <nav>
                <ul class="nav-links">
                    <li>
                        <div class="search-container">
                            <input type="text" placeholder="Buscar">
                            <button>Buscar</button>
                        </div>
                    </li>
                    <li><a href="inicio.html" onclick="cambiarContenido(event, 'contenido-inicio')"
                            class="nav-button">Inicio</a>
                    </li>
                    <li><a href="introduccion.html" onclick="cambiarContenido(event, 'contenido-introduccion')"
                            class="nav-button">Introducción</a></li>
                    <li><a href="indice-taxonomico.html" onclick="cambiarContenido(event, 'contenido-indice')"
                            class="nav-button">Índice Taxonómico</a></li>
                    <li><a href="quienes-somos.html" onclick="cambiarContenido(event, 'contenido-quienes')"
                            class="nav-button">Quiénes Somos</a></li>
                    <li><a href="glosario.html" onclick="cambiarContenido(event, 'contenido-glosario')"
                            class="nav-button">Glosario</a></li>
                    <li><a href="contactenos.html" onclick="cambiarContenido(event, 'contenido-contacto')"
                            class="nav-button">Contáctenos</a></li>
                </ul>
            </nav>
        </div>

        <div class="content-container">
            <section id="contenido-inicio">

                <div class="text-with-background">

                    <h3 class="bienvenido">
                        <?php
                        // Mostrar el nombre de usuario si está presente en el parámetro de la URL
                        if (isset($_GET["nombre"])) {
                            $nombreUsuario = $_GET["nombre"];
                            echo "<h1>Bienvenido, $nombreUsuario!</h1>";
                        } else {
                            echo "Usuario no identificado";
                        }
                        ?>
                    </h3>

                </div>

                <img id="home" src="../img/inicio2.gif" alt="">


            </section>

            <section id="contenido-introduccion" style="display: none;">
                <h2>Introducción</h2>
                <div class="intro">
                    <img class="intro1" src="../img/f1.jpg" alt="intro">
                    <img class="intro2" src="../img/fondo3.jpg" alt="intro2">
                </div>
                <div class="textintro">
                    <p>Fungí Explorer tiene como objetivo poner a disposición el compendio de información más completo
                        de hongos
                        macroscópicos del Ecuador.

                        Los hongos del Ecuador comprenden un grupo de organismos versátiles y diversos en su morfología,
                        fisiología
                        y ecología, estas características les han permitido colonizar todo tipo de hábitats, desde
                        páramos hasta
                        selvas tropicales. Su amplia distribución refleja su importancia ecológica dentro de los
                        ecosistemas. Los
                        hongos son los principales degradadores y recicladores de la materia orgánica, y sin hongos no
                        habría vida
                        en la tierra. Sin su presencia, los restos de los seres vivos que mueren se acumularían y darían
                        lugar a
                        inmensos depósitos de materia orgánica. Además, los hongos han sido utilizados en la industria
                        farmacéutica,
                        alimentaria y agrícola contribuyendo de muchas maneras al bienestar humano, pero aún hay mucho
                        por
                        descubrir.

                        Hasta la fecha, FungiWebEcuador dispone información de más de 7700 especímenes, agrupados en 60
                        órdenes, 155
                        familias, 472 géneros y 843 especies. FungiWebEcuador incluye una lista actualizada de especies
                        con su
                        respectiva distribución geográfica, identificación y taxonomía. El portal, además, comparte
                        imágenes de la
                        mayoría de especies de hongos del Ecuador, así como mapas de distribución actual y potencial de
                        acuerdo con
                        escenarios de cambio climático a futuro. Estos mapas se modifican con el crecimiento de las
                        colecciones.

                        Brindar información sobre diversidad, importancia ecológica y cultural es fundamental para el
                        desarrollo de
                        propuestas de manejo sustentable y así mantener la estabilidad de los ecosistemas de los cuales
                        obtenemos
                        los servicios esenciales para nuestro desarrollo humano..</p>

                </div>

            </section>

            <section id="contenido-indice" style="display: none;">
                <h2>Indice Taxonomico</h2>
                <div class="scroll-container">
                    <table id="tabla-especies">
                        <tbody>
                            <?php include('../php/selecionar.php'); ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="contenido-quienes" style="display: none;">
                <h2>Quiénes Somos</h2>
                <p>Contenido de la sección de Quiénes Somos.</p>
            </section>

            <section id="contenido-glosario" style="display: none;">
                <h2>Glosario</h2>
                <p>Contenido de la sección de Glosario.</p>
            </section>

            <section id="contenido-contacto" style="display: none;">
                <h2>Contáctenos</h2>
                <p>Jeremy Pavon: jjpavonb@utn.edu.ec/0997786962</p>
            </section>

            <section id="contenido-registro" style="display: none;">

                <form id="msform" enctype="multipart/form-data" method="POST" action="../php/guardar_datos.php">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Datos Generales</li>
                        <li>Clasificación</li>
                        <li>Descripción</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Ingrese datos del Hongo</h2>
                        <h3 class="fs-subtitle">Reino Fungí</h3>

                        <input type="text" name="nombrehongo" placeholder="Nombre Científico" />
                        <label for="division">División:</label>
                        <select id="division" name="" onchange="actualizarCombo()">
                            <option value="opcion1">Basidiomycota</option>
                            <option value="opcion2">Ascomycota</option>
                        </select>
                        <label for="clases">Clase:</label>
                        <select id="clase" name="">
                            <option value="">Homobasidiomycetes</option>
                        </select>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Orden de los Hongos</h2>
                        <h3 class="fs-subtitle">Complete los campos</h3>
                        <label for="hongos">Orden:</label>
                        <select id="clase" name="">
                            <option value="Aga">Agaricales</option>
                            <option value="Au">Auriculiares</option>
                            <option value="Bole">Boletales</option>
                            <option value="Bo">Bolitiales</option>
                            <option value="Botry">Botryosphaeriales</option>
                            <option value="Cri">Cribrarriida</option>
                            <option value="Dan">Dancrymycetales</option>
                            <option value="Do">Dothideales</option>
                            <option value="Geas">Geastrales</option>
                            <option value="Geo">Geoglossales</option>
                            <option value="Gloe">Gleophyllales</option>
                            <option value="Gomp">Gomphales</option>
                            <option value="helo">Helotiales</option>
                            <option value="hym">Hymenochaetales</option>
                            <option value="hypo">Hypocreales</option>
                            <option value="Per">Pertusariales</option>
                            <option value="Pezi">Pezizales</option>
                            <option value="Pha">Phallales</option>
                            <option value="Poly">Polyporales</option>
                            <option value="Pro">Protostelina</option>
                            <option value="Pyxi">Pyxidiophorales</option>
                            <option value="Russ">Russulales</option>
                            <option value="Sor">Sordariales</option>
                            <option value="The">Thelephorales</option>
                            <option value="Tre">Tremellales</option>
                            <option value="Aga">Trichiida</option>
                            <option value="Aga">Xylariales</option>
                        </select>

                        <label for="hongos">Familia:</label>
                        <select id="clase" name="">
                            <option value="Aga">Agaricaceae</option>
                            <option value="Au">Amanitaceae</option>
                            <option value="Bole">Bolbitiaceae</option>
                            <option value="Bo">Cortinariaceae</option>
                            <option value="Botry">Entomataceae</option>
                            <option value="Cri">Hydnangiaceae</option>
                            <option value="Dan">Inocybaceae</option>
                            <option value="Do">Omphalotacea</option>
                            <option value="Geas">Pluteaceae</option>
                            <option value="Geo">Schizophyllaceae</option>
                            <!-- Auriculares -->
                            <option value="Au">Auriculariaceae</option>
                        </select>

                        <label for="hongos">Género:</label>
                        <select id="clase" name="">
                            <option value="Aga">Agaricus</option>
                            <option value="Au">Lepiota</option>
                            <option value="Bole">Macrolepiota</option>
                            <option value="Bo">Leucoagaricus</option>
                        </select>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Detalles del Hongo</h2>
                        <h3 class="fs-subtitle">Estamos en la parte final</h3>

                        <label for="hongos">Especie:</label>
                        <select id="clase" name="">
                            <option value="Aga">Agaricus campestris</option>
                            <option value="Au">Lepiota atrodisca</option>
                            <option value="Bole">Macrolepiota procera</option>
                            <option value="Bo">Leucoagaricus leucothites</option>
                        </select>

                        <input type="text" name="habitat" placeholder="Habitat" />
                        <input type="text" name="cantidad" placeholder="Cantidad" />
                        <input type="file" name="imagen" placeholder="Imagen" />
                        <textarea name="descripcion" placeholder="Descripcion"></textarea>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" class="submit action-button" value="Submit" />
                    </fieldset>
                </form>


            </section>
            <script src="https://kit.fontawesome.com/a8638e0a1d.js" crossorigin="anonymous"></script>
            <script src="../js/main.js"></script>
        </div>
    </div>


    <!---------------Footer---------------------------------->
    <footer class="pie-pagina" id="contacto">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../img/LogoFungi.png" alt="Logo de Fungi">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p><i class="fa-brands fa-whatsapp"></i> 0985459232</p>
                <p><i class="fa-regular fa-envelope"></i> fungiexplorer@gmail.com</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Bryan Juma</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>

</html>