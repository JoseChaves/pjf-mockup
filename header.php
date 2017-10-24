<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/flag-icon.css">
    <!-- <title>Panama Jazz Festival</title> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/materialize/js/materialize.min.js"></script>
    <?php wp_head();?>
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
            $('.slider').slider();
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
        }

        .heavy-nexa {
            font-family: nexa;
            font-weight: bold;
        }

        .bold-title:hover{
           font-family: nexa;
           font-weight: bold;
       }

    </style>

    <!-- Include google map lib -->

</head>
<body class="white">
  <div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
 <nav class="nav-extended nav-full-header pjf-blue">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="valign-wrapper">
                        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo thin center " style="margin-top:0;padding-top:0" id="upfront">
                          <div class="hide-on-med-and-down">
<!--                            <p style="font-family: embrace; padding-top:50;" class="pjf-yellow-text hide-on-med-and-down"><span class="white-text">15</span> Panama <span class="white-text">Jazz</span> Festival</p>-->
                            <img class="responsive-img" src="<?php echo get_bloginfo('template_directory'); ?>/imgs/logoWEB.png" width="75%" style="padding-top:95">
                        </div>
                        <div class=" hide-on-large-only">
<!--                            <p style="font-family: embrace; padding-top:45;" class="pjf-yellow-text"><span class="white-text">15</span> Panama <span class="white-text">Jazz</span> Festival</p>-->
                             <img class="responsive-img" src="<?php echo get_bloginfo('template_directory'); ?>/imgs/logoWEB.png" style="padding-top:35">
                        </div>
                        </a>

                        <a href="#" data-activates="side-mob" class="button-collapse "><i class="material-icons">menu</i></a>


                    </div>
                </div>
                <div class="nav-content">
                    <div class="categories-wrapper left">
                        <div class="categories-container">
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                      <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
                        <!-- <li><a href="">Artistas</a></li>
                        <li><a href="events.html">Eventos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Prensa</a></li>
                        <li><a href="travel.html">Viaja a Panamá</a></li> -->
                    </ul>
                    <ul id="side-mob" class="side-nav">
                        <li><div class="background center-align"><img src="http://panamajazzfestival.com/wp-content/uploads/2017/06/logo-pagina-web1.png" class="center-align" style="padding: 10">
                            </div></li>
                            <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
                          <!-- <li><a href="">Artistas</a></li>
                         <li><a href="events.html#upfront">Eventos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Prensa</a></li>
                        <li><a href="travel.html">Viaja a Panamá</a></li> -->
                    </ul>
                    </div>
                            </div><br>
                </div>
            </div>
        </nav>
</header>
