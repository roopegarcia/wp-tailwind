<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="px-10 mx-auto site-header pivot-content">
  <div class="site-header__branding">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__title" rel="home" itemprop="headline">
      <img class="site-header__logo skew-x-12" width="300" height="100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bttw-logo.png" loading="lazy" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </a>
  </div>
  <button href="#" class="pivot font-mono uppercase steve-button">pivot</button>
</div>
    <div class="header">
      <nav class="vertical-navigation text-2xl">
        <?php  wp_nav_menu (array( 
        'theme_location' => 'header-menu',
        'container_class' => 'header_menu_class'
        ) ); 
        ?>
      </nav>
    </div>