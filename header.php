<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="14633398-3797-4d0e-a2d3-198a8d83ec51" data-blockingmode="auto" type="text/javascript"></script>
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
  <div class="flex max-w-screen-xl site-header p-8 mb-10 mx-auto pivot-content">
  <div class="site-header__branding">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__title" rel="home" itemprop="headline">
      <img class="site-header__logo" width="240" height="100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/log-1-alt.png" loading="lazy" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </a>
  </div>

  <div class="site-header__inner sm-mb-0">
      <nav class="vertical-navigation">
        </div class="header_menu_class">
              <!-- <?php  wp_nav_menu (array( 
              'theme_location' => 'header-menu',
              'container_class' => 'header_menu_class'
              ) ); 
              ?> -->
            <ul id="menu-main-menu">
                <li <?php if (is_page('Front Page')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                <li <?php if (is_page(90)) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/who-is-balls-to-the-wall'); ?>">Who am I?</a></li>
                <li <?php if (get_post_type() == 'programs') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/programs') ?>">Programs</a></li>  
                <li><a class="open-contact" href="#">Feedback</a></li>   
            </ul>
          </div>
      </nav>
    </div>

</div>
    