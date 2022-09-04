<?php
/*
Template Name: Home
*/
get_header(); ?>

<section id="sobre" class="container my-5">
  <div class="row d-flex justify-content-center align-items-center text-center text-md-left">
    <?php query_posts('page_id=17'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-11 col-md-6">
      <h2 class="font-weight-bold mb-3"><?php the_title(); ?></h2>
      
      <?php the_content(); ?>
    </div>

    <div class="col-11 col-md-6">
      <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Estoque de peças da Casa do Honda e Toyota" />
    </div>

    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
  </div>
</section>

<section id="pecas" class="bg-secondary py-5">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 mb-5">
        <h2 class="text-center font-weight-bold text-white">Peças em destaque</h2>
      </div>

      <div class="col-12">
        <div class="card-deck">
          <div class="owl-carousel">
            <?php query_posts('post_type=pecas&post_per_page=10'); ?>						
						<?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
            
            <div class="card">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>" />
              </a>

              <div class="card-body">
                <h5 class="card-title text-vermelho mb-1">
                  <?php the_category( ', ' ); ?>
                </h5>
                <p class="font-weight-bold text-secondary mb-1"><?php the_title(); ?></p>
                <p class="card-text"><?php the_content(); ?></p>
              </div>

              <div class="card-footer text-right">
                <a href="#" role="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#modalContato">Solicite informações <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

            <?php endwhile; endif; ?>
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

<section id="localizacao" class="container my-5">
  <div class="row">
    <div class="col-12 col-md-6">
      <img src="<?php bloginfo('template_url'); ?>/images/celular-endereco.png" class="img-fluid" alt="#" />
    </div>

    <div class="col-12 col-md-6">
      <div class="balao-contatos">
        <h3><i class="fas fa-map-marker-alt"></i> Visite nossa loja</h3>
        <p><a href="https://www.google.com/maps/place/Casa+do+Honda+e+Toyota/@-19.9126677,-43.9823035,17z/data=!3m1!4b1!4m5!3m4!1s0xa6976511d78925:0x6bcdd098a6074550!8m2!3d-19.9126728!4d-43.9801148" target="_blank">Av. Dom Pedro II, 4157 - Jardim Montanhês<br />
        Belo Horizonte/MG, CEP 30810-190<br />
        <small>(Clique para ver o mapa)</small></a></p>

        <h3><i class="far fa-clock"></i> Horário de funcionamento</h3>
        <p>Segunda a sexta de 8h às 18h<br />
        Sábado de 8h às 12h</p>

        <h3 class="text-phone float-md-left mr-1 mr-md-5">
          <a href="tel:3125340546" target="_blank"><i class="fas fa-phone"></i> <small>31</small> 2534.0546</a>
        </h3>

        <h3 class="text-phone">
          <a href="https://api.whatsapp.com/send?phone=5531971486378&text=Ol%C3%A1!" target="_blank"><i class="fab fa-whatsapp"></i> <small>31</small> 97148.6378</a>
        </h3>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-6 text-center text-md-left">
        <p class="lead font-weight-bold pb-0">Solicite um orçamento sem compromisso agora mesmo, responderemos o mais breve possível.</p>
      </div>

      <div class="col-12 col-md-3 text-center">
        <a href="#" role="button" class="btn btn-lg btn-primary font-weight-bold" data-toggle="modal" data-target="#modalContato">Solicite um Orçamento <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>