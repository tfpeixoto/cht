<?php
/*
Template Name: Home
*/
$estiloPagina = 'home.css';
require_once('header.php');
?>

<div class="jumbotron banner">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-5 banner__puv">
        <h1>As peças para o seu <span>Honda</span> ou <span>Toyota</span> estão aqui</h1>

        <img src="<?= get_template_directory_uri(); ?>/images/marca-honda.svg" width="84" height="68" title="Marca da Honda" />
        <img src="<?= get_template_directory_uri(); ?>/images/marca-toyota.svg" width="84" height="67" title="Marca da Toyota" />
      </div>

      <div class="col-12 col-md-5 banner__cta">
        <div class="row d-flex justify-content-end">
          <div class="col-12 col-md-10">
            <p class="lead">Encontre os melhores preços em peças novas e usadas para o seu carro na <span class="font-weight-bold">Av. Pedro II, em Belo Horizonte.</span></p>
          </div>

          <div class="col-12 col-md-11 text-center">
            <a href="#" role="button" class="btn btn-orcamento" data-toggle="modal" data-target="#modalContato">Solicite um Orçamento</a>
            <a href="#pecas" role="button" class="btn btn-pecas">Veja as peças</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="sobre" class="sobre">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center text-center text-md-left">
      <?php query_posts('page_id=17');
      if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="col-11 col-md-6">
            <h2 class="font-weight-bold mb-3"><?php the_title(); ?></h2>

            <?php the_content(); ?>
          </div>

          <div class="col-11 col-md-6">
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" width="540" height="405" alt="Foto do estoque de peças da Casa do Honda e Toyota" />
          </div>

      <?php endwhile;
      endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>

<section id="pecas" class="pecas">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 mb-5">
        <h2 class="text-center font-weight-bold text-white">Peças em destaque</h2>
      </div>

      <div class="col-12">
        <div class="card-deck">
          <div class="owl-carousel">
            <?php
            $args = array(
              'post_type' => 'pecas',
              'post_per_page' => 10
            );
            $pecas = new WP_Query($args);

            if ($pecas->have_posts()) : while ($pecas->have_posts()) : $pecas->the_post(); ?>

                <div class="card">
                  <?php the_post_thumbnail('thumb-list', array('class' => 'card-img-top')); ?>

                  <div class="card-body">
                    <p class="card-title text-vermelho mb-1 label-ctegory">
                      <?php the_category(', '); ?>
                    </p>
                    <h3><?php the_title(); ?></h3>
                    <p class="card-text"><?php the_content(); ?></p>
                  </div>

                  <div class="card-footer text-right">
                    <a href="#" role="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#modalContato">Solicite informações <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>

            <?php endwhile;
            endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
      </div>

      <div class="col-11 col-md-6 my-0 my-md-5 text-center">
        <p class="lead text-white"><span class="font-weight-bold">Não encontrou o que procura?</span><br /> Podemos te ajudar! Solicite um orçamento e iremos em busca das peças que você precisa.</p>

        <a href="#" role="button" class="btn btn-lg btn-primary font-weight-bold" data-toggle="modal" data-target="#modalContato">Solicite um Orçamento <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section id="localizacao" class="localizacao">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <img src="<?php bloginfo('template_url'); ?>/images/celular-endereco.png" width="540" height="608" class="img-fluid" alt="Telefone com o mapa da localização da loja" />
      </div>

      <div class="col-12 col-md-6">
        <div class="balao-contatos">
          <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z" />
            </svg> Visite nossa loja</h3>
          <p><a href="https://www.google.com/maps/place/Casa+do+Honda+e+Toyota/@-19.9126677,-43.9823035,17z/data=!3m1!4b1!4m5!3m4!1s0xa6976511d78925:0x6bcdd098a6074550!8m2!3d-19.9126728!4d-43.9801148" target="_blank">Av. Dom Pedro II, 4157 - Jardim Montanhês<br />
              Belo Horizonte/MG, CEP 30810-190<br />
              <small>(Clique para ver o mapa)</small></a></p>

          <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
            </svg> Horário de funcionamento</h3>
          <p>Segunda a sexta de 8h às 18h<br />
            Sábado de 8h às 12h</p>

          <h3 class="text-phone">
            <a href="https://api.whatsapp.com/send?phone=553125340546&text=Ol%C3%A1!" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
              </svg> <small>31</small> 2534.0546</a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta" class="cta">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-6 cta__text">
        <p class="lead">Solicite um orçamento sem compromisso agora mesmo, responderemos o mais breve possível.</p>
      </div>

      <div class="col-12 col-md-3 cta__button">
        <a href="#" role="button" class="btn btn-lg btn-primary font-weight-bold" data-toggle="modal" data-target="#modalContato">Solicite um Orçamento <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php
require_once('footer.php');
?>