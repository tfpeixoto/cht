<?php

// Configs theme
function cht_title_tag()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('thumb-list', 350, 300, true);
}
add_action('after_setup_theme', 'cht_title_tag');

// Script
function cht_scripts()
{
  wp_enqueue_style('critital', get_template_directory_uri() . '/css/critical.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'cht_scripts');

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

// Remover o block-library/style.css
function wpassist_remove_block_library_css()
{
  wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');

/**
 * Disable the emoji's
 */
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

  // Remove from TinyMCE
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}

// send headers seo
function hot_set_headers_seo()
{
  header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
  header('X-Frame-Options: sameorigin');
  header('X-XSS-Protection: 1; mode=block');
  header('X-Content-Type-Options: nosniff');
  header('Referrer-Policy: same-origin');
  header("Cache-Control: no-cache, no-store, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: 0");
  // header('Content-Security-Policy': 'default-src self');
}
add_action('send_headers', 'hot_set_headers_seo');
