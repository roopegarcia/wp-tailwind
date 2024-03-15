<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="sm mx-auto site-header pivot-content">
  <div class="site-header__branding">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__title" rel="home" itemprop="headline">
      <img class="site-header__logo skew-x-12" width="300" height="100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bttw-logo.png" loading="lazy" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </a>
  </div>
  <button class="pivot px-6 h-12 uppercase font-semibold tracking-wider border-2 border-black bg-teal-400 text-black" type="submit">
    Pivot
  </button>
</div>

    <!-- <div class="header-main max-w-4xl mx-auto px-4">
      <h1 class="amazing-header-class text-3xl py-10"><a href="<?php echo get_home_url(); ?>" class="hover:text-blue-500 text-6xl">Welcome To Our Header!</a></h1>
    </div> -->
    <div class="header">
      <nav class="vertical-navigation text-2xl">
        <?php  wp_nav_menu (array( 
        'theme_location' => 'header-menu',
        'container_class' => 'header_menu_class'
        ) ); 
        ?>
      </nav>
    </div>