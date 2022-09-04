  <footer class="py-5">
    <div class="container">
      <div class="row d-flex justity-content-between mb-3">
        <div class="col-12 col-md-3 text-center mb-3">
          <a href="#" title="Casa do Honda e Toyota"><img src="<?php bloginfo('template_url'); ?>/images/marca-rodape.svg" alt="Casa do Honda e Toyota" /></a>
        </div>

        <div class="col-12 col-md-3 d-flex align-items-center justify-content-center justify-content-md-end">
          <h3><a href="tel:3125340546" target="_blank"><i class="fas fa-phone"></i> <small>31</small> 2534.0546</a></h3>
        </div>

        <div class="col-12 col-md-3 d-flex text-center text-md-left align-items-center justify-content-center justify-content-md-start">            
          <p>Segunda a sexta de 8h às 18h<br />
          Sábado de 8h às 12h</p>
        </div>

        <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-end social-media">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item"><a href="https://www.instagram.com/casahondatoyota/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=5531971486378&text=Ol%C3%A1!" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row copyright text-center text-md-left pt-3">
        <div class="col-12 col-md-6">
          <p><?php the_date('Y'); ?> © Copyright. Todos os direitos reservados.<br />
          Casa do Honda e Toyota</p>
        </div>

        <div class="col-12 col-md-6 text-center text-md-right">
          <p>Av. Dom Pedro II, 4157 - Jardim Montanhês<br />
          Belo Horizonte/MG, CEP 30810-190</p>
        </div>        
      </div>
    </div>
  </footer>

  <a href="https://api.whatsapp.com/send?phone=5531971486378&text=Ol%C3%A1!" target="_blank" style="background: url(<?php bloginfo('template_url'); ?>/images/btn-whatsapp.png) no-repeat; background-size: 100%; bottom: 50px; height: 83px; position: fixed; right: 0; width: 150px; z-index: 101;">
    <div class="fixed-conversa">
    </div>
  </a>
</body>

<?php require_once('modal.php'); ?>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mask.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js" data-auto-replace-svg="nest"></script>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop: true,
    autoplay: false,
    autoplayHoverPause: true,
    responsive: {
      0 : {
        items: 1,
        nav: true
      },
      // breakpoint from 480 up
      480 : {
        items: 2,
        nav: true
      },
      // breakpoint from 768 up
      768 : {
        items: 3,
        nav: true
      }
    }
  }

  );
});

// Header fixo quando sobe
/*
$(document).ready(function() {
  var offset = $('header').offset().top;
  var $meuMenu = $('header'); // guardar o elemento na memoria para melhorar performance
  $(document).on('scroll', function () {
    if (offset <= $(window).scrollTop()) {
      $meuMenu.addClass('fixed-top');
    } else {
      $meuMenu.removeClass('fixed-top');
    }
  });
});
*/
</script>

</html>