
<?php get_header() ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
<?php
// Start the loop.
while ( have_posts() ) : the_post();

  // Include the page content template.
  get_template_part( 'content', 'page' );

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif;

// End the loop.
endwhile;
?>

</main>
</div>

    <footer class="page-footer pjf-blue">
        <div class="container">
            <div class="row">
                <div class="col s12 l3 pjf-yellow-text heavy-nexa">
                    <h5 class="heavy-nexa">Producción</h5>
                    <div class="divider"></div><br>
                    <a href="#" class="pjf-yellow-text">Créditos</a><br>
                    <a href="#" class="pjf-yellow-text">Panama Jazz Productions</a><br>
                    <br>
                    <h5 class="heavy-nexa">Idioma</h5>
                    <div class="divider"></div><br>
                    <span class="flag-icon flag-icon-us"></span> &nbsp;
                    <span class="flag-icon flag-icon-pa"></span>
                </div>

                <div class="pjf-yellow-text col s12 l3 offset-l6 heavy-nexa">
                    <h5 class="heavy-nexa">Acerca del <span style="font-family: embrace">PJF</span></h5>
                    <div class="divider"></div><br>
                    <a href="#" class="pjf-yellow-text">Danilo Perez</a><br>
                    <a href="#" class="pjf-yellow-text">Fundacion Danilo Perez</a><br>
                    <a class="pjf-yellow-text" href="#">Centro de Musicoterapia de Panamá</a>
                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container pjf-yellow-text">
                © 2017 Panama Jazz Festival
            </div>
        </div>
    </footer>
</body>

</html>
