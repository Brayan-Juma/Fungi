<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">

</head>

<body>

    <!--Header -->
    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Logo FungiExplorer</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Iniciar Sesion</a>
                </li>

                <img src="../images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="../images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">MUNDO FUNGI.</h1>
            <p class="hero__paragraph">El reino Fungi comprende
                miles de especies diferentes, y se estima que existen 
                muchas más aún por descubrir. Estos organismos se 
                encuentran en prácticamente todos los hábitats de la 
                Tierra, desde los suelos de los bosques hasta los océanos,
                 pasando por los desiertos y las zonas polares. Algunos hongos
                  son parásitos, mientras que otros forman relaciones 
                  simbióticas con plantas y animales, beneficiándose mutuamente.</p>
            <a href="#" class="cta">Registrarse</a>
        </section>
    </header>



    <main>
        <section class="container about">
            <h2 class="subtitle">Ventajas de Usar FungiExplorer</h2>
            <p class="about__paragraph">Son muchas las razones por la
                que debes usar FungiExplorer
            </p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="../img/guardar.png" class="about__icon">
                    <h3 class="about__title">Guardar Datos</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="../img/gestion.png" class="about__icon">
                    <h3 class="about__title">Gestionar Datos</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="../img/pdf.png" class="about__icon">
                    <h3 class="about__title">Generar Reportes</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Que son los Hongos??</h2>
                    <p class="knowledge__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
                        aliquam nemo in facere suscipit at delectus unde labore ad officia iste accusantium eaque
                        aperiam laborum est voluptate totam? Modi, obcaecati?</p>
                    <a href="#" class="cta">Registrarme</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="../img/img5.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>
  <!---------------Galeria---------------------------------->
        <section class="price container">
            <h2 class="subtitle">Galeria  :p</h2>

            <div class="ful-img" id="fulImgBox">
                <img src="..imgs/1.jpg" id="fulImg" alt="">
                <span onclick="closeImg()">X</span>
            </div>
        
            <div class="img-gallery">
                <img src="../img/img1.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="../img/img3.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="../img/img2.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="../img/img4.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="../img/img6.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="../img/img1.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="../img/img4.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="../img/img5.jpg" onclick="openFulImg(this.src)" alt="">
            </div>
            <script src="../js/galeria.js"></script>


        </section>
    <!---------------TESTIMONIOS---------------------------------->
        <section class="testimony">
            <div class="testimony__container container">
                <img src="../images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Dario <span class="testimony__course">Miembro de FungiExplorer.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                            blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="../img/img5.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Jeremi, <span class="testimony__course">Miembro de FungiExplorer.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione
                            voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="../img/img3.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Vitor , <span class="testimony__course">Miembro de FungiExplorer.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="../img/img1.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Bryan Juma, <span class="testimony__course">Miembro de FungiExplorer.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="../img/foto1.jpeg" class="testimony__img">
                    </figure>
                </section>


                <img src="../images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

       
    </main>



    <script src="../js/slider.js"></script>
    <script src="../js/questions.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/imf.js"></script>
</body>




</html>