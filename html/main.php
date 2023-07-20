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
                        <!-- ... (código HTML anterior) ... -->

                        <div class="search-container">
                            <input type="text" id="searchInput" placeholder="Buscar">
                            <button id="searchButton" onclick="realizarBusqueda()">Buscar</button>
                        </div>

                        <br>

                        <div id="searchResults"></div>

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
                <br>
                <br>
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
                <br>
                <br>
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
                <br>
                <br>
                <h3><b>VISION DE FUNGÍ EXPLORER:</b></h3>
                <br>
                <p>"Ser la plataforma líder a nivel mundial en la exploración y estudio de hongos,<br>
                    brindando a estudiantes y entusiastas una experiencia excepcional en la investigación<br>
                    micológica. Aspiramos a crear una comunidad global apasionada por la micología,<br>
                    donde cada descubrimiento sea valioso y significativo para la comprensión y conservación<br>
                    de la biodiversidad fungosa. Nuestra visión es fomentar la curiosidad y el conocimiento<br>
                    sobre los hongos, contribuyendo al avance científico y a la protección del medio<br>
                    ambiente a través de la innovación tecnológica y la colaboración colaborativa." </p>
                <br>
                <br>
                <h3><b>MISION DE FUNGÍ EXPLORER:</b></h3>
                <br>
                <br>
                <p>"En Fungí Explorer, nuestra misión es proporcionar una plataforma digital de vanguardia<br>
                    que facilite la investigación y el registro de observaciones de hongos de manera organizada<br>
                    y segura. Nos esforzamos por ofrecer una interfaz amigable y accesible que inspire a
                    estudiantes,<br>
                    investigadores y aficionados a explorar y aprender sobre el reino de los hongos. A través<br>
                    de nuestra comunidad en línea, buscamos conectar a personas apasionadas por la micología,<br>
                    promoviendo el intercambio de conocimientos y la colaboración en proyectos científicos.<br>
                    Nuestra misión es contribuir al conocimiento y conservación de los hongos, empoderando a<br>
                    nuestros usuarios para que sean protagonistas en la preservación del fascinante mundo fungoso."</p>




            </section>

            <section id="contenido-glosario" style="display: none;">
                <h2>Glosario</h2>
                <br>
                <ul>
                    <li>
                        <strong>Micología:</strong> Ciencia que estudia los hongos.
                    </li>
                    <br>
                    <li>
                        <strong>Hifas:</strong> Filamentos microscópicos que componen el cuerpo de un hongo.
                    </li>
                    <br>
                    <li>
                        <strong>Esporas:</strong> Células reproductivas de los hongos que se dispersan para formar
                        nuevos individuos.
                    </li>
                    <br>
                    <li>
                        <strong>Micorrizas:</strong> Asociación simbiótica entre las raíces de las plantas y los hongos,
                        beneficiosa para ambos.
                    </li>
                    <br>
                    <li>
                        <strong>Ascomiceto:</strong> Clase de hongos que producen sus esporas en sacos llamados ascos.
                    </li>
                    <br>
                    <li>
                        <strong>Basidiomiceto:</strong> Clase de hongos que producen esporas en estructuras llamadas
                        basidios.
                    </li>
                    <br>
                    <li>
                        <strong>Lignina:</strong> Sustancia que forma parte de la pared celular de los hongos y les
                        proporciona resistencia y rigidez.
                    </li>
                    <br>
                    <li>
                        <strong>Saprofitismo:</strong> Modo de nutrición de los hongos que se alimentan de materia
                        orgánica en descomposición.
                    </li>
                    <br>
                    <li>
                        <strong>Parásito:</strong> Organismo que vive a expensas de otro, obteniendo sus nutrientes y
                        dañándolo en el proceso.
                    </li>
                    <br>
                    <li>
                        <strong>Micelio:</strong> Conjunto de hifas que forman la parte vegetativa del cuerpo del hongo.
                    </li>
                    <br>
                    <li>
                        <strong>Quitina:</strong> Sustancia que forma parte de la pared celular de los hongos, similar
                        al quitosano que se encuentra en los exoesqueletos de insectos.
                    </li>
                    <br>
                    <li>
                        <strong>Ectomicorriza:</strong> Tipo de micorriza en la que los hongos forman una cubierta
                        externa en las raíces de las plantas.
                    </li>
                    <br>
                    <li>
                        <strong>Endomicorriza:</strong> Tipo de micorriza en la que los hongos penetran dentro de las
                        células de las raíces de las plantas.
                    </li>
                    <br>
                    <li>
                        <strong>Esclerocio:</strong> Estructura compacta y resistente formada por hongos para sobrevivir
                        en condiciones adversas.
                    </li>
                    <br>
                    <li>
                        <strong>Ascosporas:</strong> Esporas producidas en los ascos de los ascomicetos.
                    </li>
                   
                    
                </ul>
            </section>


            <section id="contenido-contacto" style="display: none;">
                <h2>Contáctenos</h2>
                <p><i class="fa-brands fa-whatsapp"></i> 0985459232</p>
                <p><i class="fa-regular fa-envelope"></i> fungiexplorer@gmail.com</p>

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
<script src="../js/buscar.js"></script>

</html>