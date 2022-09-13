<?php
$estiloPagina = 'style.css';
require_once('header.php');

$has_category = get_queried_object()->slug;
$has_category_name = get_queried_object()->name;
?>

<section class="banner-interno">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1><?= $has_category_name ? $has_category_name : "Casa do Honda e Toyota"; ?></h1>
      <p class="lead">Peças novas e usadas</p>
    </div>
  </div>
</section>

<section class="lista">
  <div class="container">
    <div class="row justify-content-center">
      <?php
      $args = array(
        'post_type' => 'pecas',
        'category_name' => $has_category ? $has_category : '',
        'post_per_page' => 20,
        'orderby' => 'date'
      );
      $pecas = new WP_Query($args);

      if ($pecas->have_posts()) : while ($pecas->have_posts()) : $pecas->the_post(); ?>

          <div class="col-11 col-md-4 lista__post">
            <?php the_post_thumbnail('thumb-list', array('class' => 'img-fluid')); ?>

            <p class="small"><?php the_category(', '); ?></p>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

            <a href="#" class="btn" role="button" data-toggle="modal" data-target="#modalContato">Solicite informações</a>
          </div>

        <?php endwhile;
      else : ?>

        </p>Não há peças publicadas.</p>

      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>