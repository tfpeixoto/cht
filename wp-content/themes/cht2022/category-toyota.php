<?php
$estiloPagina = 'home.css';
require_once('header.php');
?>

<main class="mt-5">
  <section class="container py-5">
    <div class="row">
      <div class="col-12 mb-5">
        <h1 class="font-weight-bold text-vermelho text-center mt-5">Toyota</h1>
        <p class="lead text-center">Peças novas e usadas</p>
      </div>

      <div class="card-deck">
      <?php
      $args = array(
        'post_type' => 'pecas',
        'cat' => 1,
        'post_per_page' => 20
      );
      $pecas = new WP_Query($args);

      if ($pecas->have_posts()) : while ($pecas->have_posts()) : $pecas->the_post(); ?>
        
        <div class="card">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>" />
          </a>

          <div class="card-body">
            <h5 class="card-title text-uppercase text-vermelho mb-1">
              <?php the_category( ', ' ); ?>
            </h5>
            <p class="font-weight-bold text-secondary mb-1"><?php the_title(); ?></p>
            <p class="text-card"><?php the_content(); ?>
          </div>

          <div class="card-footer text-right border-top-0">
            <a href="#" role="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#modalContato">Solicite informações <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>          

        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>