<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5HXGPCX');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Meta tags Obrigatórias -->
  <meta <?php bloginfo("charset"); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="google-site-verification" content="LXzT6pB4YEogn5ZTrT-UnymujYsljDE0lXswghdpNOU" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap">

  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>" as="style" media="print" onload="this.media='all'; this.onload=null;" crossorigin>

  <?php if (is_front_page()) : ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.theme.default.min.css">
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HXGPCX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header id="header" class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="order-1 order-md-1">
          <a href="<?php echo site_url(); ?>" title="Casa do Honda e Toyota" class="navbar-brand">
            <img src="<?= get_template_directory_uri(); ?>/images/marca-cht.svg" width="277" height="66" alt="Casa do Honda e Toyota" />
          </a>
        </div>

        <div class="d-flex order-3 order-md-2 header__menu">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'principal',
            'depth'            => 1,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'nav-mobile',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
          ?>
        </div>

        <div class="d-flex order-2 order-md-3 header__button">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-mobile" aria-controls="nav-mobile" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="d-none d-md-flex order-4 order-md-4 header__contatos">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item ml-3">
              <a href="https://api.whatsapp.com/send?phone=553125340546&text=Ol%C3%A1!" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
                <small>31</small> 2534.0546</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>