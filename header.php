<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="header-main max-w-4xl mx-auto px-4">
      <h1 class="amazing-header-class text-3xl py-10"><a href="<?php echo get_home_url(); ?>" class="hover:text-blue-500">Welcome To Our Header!</a></h1>
    </div>
    <div class="header">
      <nav class="vertical-navigation">
        <?php  wp_nav_menu (array( 
        'theme_location' => 'header-menu',
        'container_class' => 'header_menu_class'
        ) ); 
        ?>
      </nav>
    </div>