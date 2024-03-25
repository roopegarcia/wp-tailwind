<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5MMF82FLM6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5MMF82FLM6');
</script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="px-10 mx-auto site-header pivot-content">
  <div class="site-header__branding">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__title" rel="home" itemprop="headline">
      <img class="site-header__logo" width="300" height="100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bttw-logo.png" loading="lazy" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </a>
  </div>
  <button href="#" class="pivot font-mono uppercase steve-button">pivot</button>
  <button href="#" class="open-contact pivot font-mono uppercase steve-button">Gallup</button>
</div>
    <div class="header">
      <nav class="vertical-navigation text-2xl mb-10">
        <?php  wp_nav_menu (array( 
        'theme_location' => 'header-menu',
        'container_class' => 'header_menu_class'
        ) ); 
        ?>
      </nav>
    </div>