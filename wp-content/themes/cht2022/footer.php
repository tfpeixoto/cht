  <footer class="footer">
    <div class="container">
      <div class="row d-flex justity-content-between">
        <div class="col-12 col-md-3 footer__marca">
          <a href="#header" title="Casa do Honda e Toyota">
            <img src="<?= get_template_directory_uri(); ?>/images/marca-rodape.svg" width="178" height="42" alt="Marca da Casa do Honda e Toyota" />
          </a>
        </div>

        <div class="col-12 col-md-3 footer__contato">
          <h3><a href="tel:3125340546" target="_blank"><i class="fas fa-phone"></i> <small>31</small> 2534.0546</a></h3>
        </div>

        <div class="col-12 col-md-3 footer__days">
          <p>Segunda a sexta de 8h às 18h<br />
            Sábado de 8h às 12h</p>
        </div>

        <div class="col-12 col-md-3 footer__social">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/casahondatoyota/" title="Instagram" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icone-instagram.svg" width="32" height="28" alt="Instagram" /></a>
            </li>
            <li class="list-inline-item">
              <a href="https://api.whatsapp.com/send?phone=5531971486378&text=Ol%C3%A1!" title="Whatsapp" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icone-whatsapp.svg" width="32" height="28" alt="Whatsapp" /></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row footer__copyright">
        <div class="col-12 col-md-6 footer__copy">
          <p><?php the_date('Y'); ?> © Copyright. Todos os direitos reservados.<br />
            Casa do Honda e Toyota</p>
        </div>

        <div class="col-12 col-md-6 footer__address">
          <p>Av. Dom Pedro II, 4157 - Jardim Montanhês<br />
            Belo Horizonte/MG, CEP 30810-190</p>
        </div>
      </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=5531971486378&text=Ol%C3%A1!" title="Entre em contato pelo Whatsapp" class="footer__whatsapp" target="_blank">
      <div class="fixed-conversa">
      </div>
    </a>
  </footer>

  <?php
  require_once('modal.php');
  wp_footer();
  ?>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/scripts.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.mask.min.js"></script>
  <?php /*<script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js" data-auto-replace-svg="nest"></script>*/ ?>

  </body>

  </html>