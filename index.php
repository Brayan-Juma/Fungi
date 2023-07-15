<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<<<<<<< HEAD
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
=======
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/normalize.css">
>>>>>>> bb2b17047ba526c6b938345762a6009dd56b8337

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
                    <a href="#footer" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>
                <li class="nav__items">
                    <a href="/fungi/html/login.php" class="nav__links">Iniciar Sesion</a>
                </li>

                <img src="./images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
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

            <a href="./html/register.html" class="cta">Registrarse</a>

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
                    <img src="./img/guardar.png" class="about__icon">
                    <h3 class="about__title">Guardar Datos</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./img/gestion.png" class="about__icon">
                    <h3 class="about__title">Gestionar Datos</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./img/pdf.png" class="about__icon">
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
                    <a href="./html/register.html" class="cta">Registrarme</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./img/img5.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>
  <!---------------Galeria---------------------------------->
        <section class="price container">
            <h2 class="subtitle">GALERIA</h2>

            <div class="ful-img" id="fulImgBox">
                <img src="./img/img1.jpg" id="fulImg" alt="">
                <span onclick="closeImg()">X</span>
            </div>
        
            <div class="img-gallery">
                <img src="./img/img1.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="./img/img3.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="./img/img2.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="./img/img4.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="./img/img6.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="./img/img1.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="./img/img4.jpg" onclick="openFulImg(this.src)" alt="">
                <img src="./img/img5.jpg" onclick="openFulImg(this.src)" alt="">
            </div>
            <script src="./js/galeria.js"></script>


        </section>
    <!---------------TESTIMONIOS---------------------------------->
        <section class="testimony">
        <h2 class="subtitle">TESTIMONIOS</h2>
            <div class="testimony__container container">
                <img src="./images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Dario <span class="testimony__course">Miembro de FungiExplorer.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                            blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./img/img5.jpg" class="testimony__img">
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
                        <img src="./img/img3.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Vitor , <span class="testimony__course">Miembro de FungiExplorer.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./img/img1.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Bryan Juma, <span class="testimony__course">Miembro de FungiExplorer.</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./img/foto1.jpeg" class="testimony__img">
                    </figure>
                </section>


                <img src="./images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

       
    </main>
<<<<<<< HEAD
<!--::::Pie de Pagina::::::-->
<footer id="footer" class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/logotipo-sleedw.svg" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
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
=======

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">FUNGIEXPLORER</h2>

                <ul class="nav__link nav__link--footer">
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
                </ul>
            </nav>

            <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
                <h2 class="footer__newsletter">Registrarme ahora !!!</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Bryan Juma</h3>
        </section>
>>>>>>> bb2b17047ba526c6b938345762a6009dd56b8337
    </footer>


    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/imf.js"></script>
</body>




</html>