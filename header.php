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
  <div class="max-w-screen-xl site-header px-10 mb-10 mx-auto pivot-content">
  <div class="site-header__branding">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__title" rel="home" itemprop="headline">
      <img class="site-header__logo" width="240" height="100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bttw-logo.png" loading="lazy" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </a>
  </div>
  <div class="site-header__inner mb-10">
      <nav class="vertical-navigation">
        <?php  wp_nav_menu (array( 
        'theme_location' => 'header-menu',
        'container_class' => 'header_menu_class'
        ) ); 
        ?>
      </nav>
          <button href="#" class="pivot uppercase steve-button">pivot</button>
          <button href="#" class="open-contact pivot uppercase steve-button">Feedback</button>
        </div>
</div>
    