<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/flag-icon.css">

    <title>Panama Jazz Festival</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/materialize/js/materialize.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".button-collapse").sideNav({
                edge: 'left',
                draggable: true
            });
            $('.navi').pushpin({
                top: 0,
                bottom: 1000,
                offset: 0
            });
            $('.slider').slider({
              indicators: 'false',
              interval: 1000
            });
        });

    </script>
    <style>
        @font-face {
            font-family: embrace;
            src: url(<?php echo get_bloginfo('template_directory'); ?>/fonts/embrace.ttf);
        }

        @font-face {
            font-family: happyfox;
            src: url(<?php echo get_bloginfo('template_directory'); ?>/fonts/HappyFox-Condensed.otf);
        }

        @font-face {
            font-family: nexa;
            src: url(<?php echo get_bloginfo('template_directory'); ?>/fonts/Nexa_Bold.otf);
            font-weight: bold;
        }

        @font-face {
            font-family: nexa;
            src: url(<?php echo get_bloginfo('template_directory'); ?>/fonts/Nexa_Light.otf);
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        html {
            font-family: nexa;
            color: #606060;
        }

        .heavy-nexa {
            font-family: nexa;
            font-weight: bold;
        }

    </style>

    <!-- Include google map lib -->

</head>

<body class="white">
    <div id="navi">
        <nav class="nav-extended nav-full-header pjf-blue">
            <div class="nav-background center pjf-blue z-depth-2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/imgs/headerpjf.jpg" width="100%">
            </div>
            <div class="container">
                <div class="nav-wrapper">
                    <div class="valign-wrapper">
                        <!--
                        <a href="index.html" class="brand-logo thin center " style="margin:10;padding-top:0">
                            <div class="hide-on-med-and-down">
                                <p style="font-family: embrace; padding-top:50;" class="pjf-yellow-text center hide-on-med-and-down"><span class="white-text">15°</span> Panama <span class="white-text">Jazz</span> Festival</p>
                            </div>
                            <div class=" hide-on-large-only">
                                <p style="font-family: embrace; padding-top:35;" class="pjf-yellow-text center"><span class="white-text">15</span> Panama <span class="white-text">Jazz</span> Festival</p>
                            </div>
                            <img src="http://panamajazzfestival.com/wp-content/uploads/2017/06/logo-pagina-web1.png" height="50" style="clip(100px,100px)">
                          </a>
-->
                        <a href="#" data-activates="side-mob" class="button-collapse "><i class="material-icons">menu</i></a>
                        <div class="categories-wrapper left">
                            <div class="categories-container">
                                <ul id="nav-mobile" class="right hide-on-med-and-down">
                                    <!-- <li><a href="">Artistas</a></li>
                                    <li><a href="events.php">Eventos</a></li>
                                    <li><a href="#">Contacto</a></li>
                                    <li><a href="#">Prensa</a></li>
                                    <li><a href="travel.html">Viaja a Panamá</a></li> -->
                                    <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
                                </ul>
                                <ul id="side-mob" class="side-nav">
                                    <li>
                                      <div class="slider">
                                        <ul class="slides">
                                          <li>
                                        <div class="background center-align"><img src="http://panamajazzfestival.com/wp-content/uploads/2017/10/headerpjf_2-07.jpg" class="center-align" style="padding: 10">
                                        </div>
                                      </li>
                                      <li>
                                    <div class="background center-align"><img src="http://panamajazzfestival.com/wp-content/uploads/2017/10/headerpjf_2-08.jpg" class="center-align" style="padding: 10">
                                    </div>
                                  </li>
                                      </ul>
                                      </div>
                                    </li>
                                    <!-- <li><a href="">Artistas</a></li>
                                    <li><a href="events.html">Eventos</a></li>
                                    <li><a href="#">Contacto</a></li>
                                    <li><a href="#">Prensa</a></li>
                                    <li><a href="travel.html">Viaja a Panamá</a></li> -->
                                    <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
                                </ul>
                            </div>
                        </div><br>
                    </div>
                </div>
                <!--
                <div class="nav-content">

                        <div class="categories-wrapper left">
                        <div class="categories-container">
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="events.html">Eventos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Prensa</a></li>
                        <li><a href="travel.html">Viaja a Panamá</a></li>
                    </ul>
                    <ul id="side-mob" class="side-nav">
                        <li><div class="background center-align"><img src="http://panamajazzfestival.com/wp-content/uploads/2017/06/logo-pagina-web1.png" class="center-align" style="padding: 10">
                            </div></li>
                         <li><a href="events.html">Eventos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Prensa</a></li>
                        <li><a href="travel.html">Viaja a Panamá</a></li>
                    </ul>
                    </div>
                            </div><br>
                </div>
-->
            </div>
        </nav>
    </div>
    <div class="container">
      <div class="row pjf-blue-text bold-title">
                  <h1 class="center-align  pjf-blue-text" style="font-family: embrace"><a href="artistas" class="pjf-blue-text">Artistas</a></h1>
                  <div class="col s6 l3">
                      <div class="card small bold-title hoverable">
                          <div class="card-image">
                              <img class="responsive-img circle" src="<?php echo get_bloginfo('template_directory'); ?>/imgs/wsq.jpg">
                          </div>
                          <div class="card-content">
                              <span class="card-title bold-title"><a href="artistas" class="pjf-blue-text bold-title">Cuarteto de Wayne Shorter</a></span>
                          </div>
                      </div>

                  </div>
                  <div class="col s6 l3">
                    <div class="card small hoverable">
                      <div class="card-image">
                      <img src="http://panamajazzfestival.com/wp-content/uploads/2017/09/MBose.png">
                  </div>
                  <div class="card-content">
                      <span class="card-title bold-title">Miguel Bosé</span>
                  </div>
                    </div>
                  </div>

                  <div class="col s6 l3">
                      <div class="card small hoverable">
                          <div class="card-image">
                              <img src="https://www.berklee.edu/sites/default/files/1308-Chucho_Valdes_Qt-credit-CAMI.jpeg">
                          </div>
                          <div class="card-content">
                              <span class="card-title bold-title"><a href="artistas" class="pjf-blue-text bold-title">Cuarteto de Chucho Valdés</a></span>
                          </div>
                      </div>
                  </div>

                  <div class="col s6 l3">
                      <div class="card small hoverable">
                          <div class="card-image">
                              <img src="http://www.jmeshel.com//wp-content/uploads/2011/05/lucianasouza.jpg">
                          </div>
                          <div class="card-content">
                              <span class="card-title bold-title"><a href="artistas" class="pjf-blue-text bold-title">Luciana Souza</a></span>
                          </div>
                      </div>
                  </div>
                  </div>

        <div class="row">
            <br>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-content">

                            <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/_-12u-ZQ9Mc" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!--                                <p style="text-align: justify;text-justify: inter-word;">Bienvenidos a nuestra decimoquinta edición del Panama Jazz Festival, proyecto cultural donde la creatividad, intercambio, talento e inspiración han convertido este evento en una referencia internacional. Desde el 15 al 20 de enero del 2018, nuestra capital se convierte en el escenario del jazz mundial, gracias al apoyo de gobierno, empresas privadas, organizaciones no gubernamentales y la inestimable pasión y fidelidad de un público local y extranjero. El festival es el evento anual más importante que realiza la Fundación Danilo Pérez donde transforma positivamente la sociedad a través de la música. Los invito a celebrar con música para crear un ritmo que inspire paz, amor y hermandad.</p>-->
                            <!--
                                <br>
                                <h5 class="header right">Danilo Perez</h5>
-->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <?php get_footer(); ?>
</body>

</html>
