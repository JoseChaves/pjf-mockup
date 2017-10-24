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
                  <?php if ( dynamic_sidebar('footerleft_widgets') ) : else : endif; ?>
                <span class="flag-icon flag-icon-us"></span> &nbsp;
                <span class="flag-icon flag-icon-pa"></span>
            </div>

            <div class="pjf-yellow-text col s12 l3 offset-l6 heavy-nexa">
                <h5 class="heavy-nexa">Acerca del <span style="font-family: embrace">PJF</span></h5>
                <div class="divider"></div><br>
                <a href="#" class="pjf-yellow-text">Danilo Perez</a><br>
                <a href="#" class="pjf-yellow-text">Fundacion Danilo Perez</a><br>
                <a class="pjf-yellow-text" href="#">Centro de Musicoterapia de Panamá</a>
                  <?php if ( dynamic_sidebar('footerright_widgets') ) : else : endif; ?>
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
