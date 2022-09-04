<?php

//Chamar a tag title
function cht_title_tag()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cht_title_tag');

// Prevenir o erro na tag title em versões antigas
if (!function_exists('wp_render_title_tag')) {
  function cht_render_title()
  {
?>
    <title><?php wp_title('|', true, 'right'); ?></title>
<?php
  }
  add_action('wp_head', 'cht_render_title');
}

// Registrar o Custom Navigation Walker
require_once get_template_directory() . '/wp_bootstrap_navwalker.php';

// Registrar o Menu
register_nav_menus(array(
  'principal' => __('Menu Principal', 'cht'),
));

// Registrar os Post Types
function meus_posts_type()
{
  // Unidades
  register_post_type(
    'pecas',
    array(
      'labels'           => array(
        'name'           => __('Peças'),
        'singular_name' => __('Peça'),
      ),
      'public'           => true,
      'has_archive'     => false,
      'menu_icon'        => 'dashicons-admin-generic',
      'taxonomies' => array('category'),
      'supports'        => array('title', 'editor', 'thumbnail', 'page-attributes'),
    )
  );
}

add_action('init', 'meus_posts_type');

// Ativer thumbnail
add_theme_support('post-thumbnails');

// send headers seo
function hot_set_headers_seo()
{
  header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
  header('X-Frame-Options: sameorigin');
  header('X-XSS-Protection: 1; mode=block');
  header('X-Content-Type-Options: nosniff');
  header('Referrer-Policy: same-origin');
  // header('Content-Security-Policy': 'default-src self');
}
add_action('send_headers', 'hot_set_headers_seo');
