<?php

get_header(); ?>

<!-- <div class="container m">
    <h1 class="text-6xl">index.php</h1>
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <?php the_post_thumbnail(); ?>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p>Content <here class=""></here></p>
        </div>
      <?php }
    } ?>
</div> -->

<div class="container px-2">
    <h1 class="text-6xl">index.php</h1>
    <div class="columns-3">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
       
       <h3 class="text-2xl mb-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <img class="site-header__logo rotate-12 aspect-square mb-10 shadow-2xl" width="300px" height="300px" src="<?php the_post_thumbnail(); ?>
      <?php }
    } ?>
    </div>
</div>

<?php get_footer();